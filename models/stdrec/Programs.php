<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%programs}}".
 *
 * @property int $progId
 * @property string $progCode
 * @property string $progTitle
 * @property string $progDesc
 * @property int $progNonFormal
 * @property string $progTuition
 * @property string $progDeans
 * @property string $progUnits
 * @property string $progLevel
 * @property string $progType
 * @property string $progMRR
 * @property string $progTerm
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%programs}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbStdrec');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['progDesc'], 'required'],
            [['progDesc', 'progLevel'], 'string'],
            [['progNonFormal'], 'integer'],
            [['progTuition', 'progUnits', 'progMRR'], 'number'],
            [['progCode', 'progType'], 'string', 'max' => 20],
            [['progTitle'], 'string', 'max' => 150],
            [['progDeans'], 'string', 'max' => 15],
            [['progTerm'], 'string', 'max' => 3],
            [['progCode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'progId' => Yii::t('app', 'Prog ID'),
            'progCode' => Yii::t('app', 'Prog Code'),
            'progTitle' => Yii::t('app', 'Prog Title'),
            'progDesc' => Yii::t('app', 'Prog Desc'),
            'progNonFormal' => Yii::t('app', 'Prog Non Formal'),
            'progTuition' => Yii::t('app', 'Prog Tuition'),
            'progDeans' => Yii::t('app', 'Prog Deans'),
            'progUnits' => Yii::t('app', 'Prog Units'),
            'progLevel' => Yii::t('app', 'Prog Level'),
            'progType' => Yii::t('app', 'Prog Type'),
            'progMRR' => Yii::t('app', 'Prog Mrr'),
            'progTerm' => Yii::t('app', 'Prog Term'),
        ];
    }
}
