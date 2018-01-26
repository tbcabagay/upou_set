<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%scholars}}".
 *
 * @property int $schoid
 * @property string $studid
 * @property string $ssem
 * @property string $syear
 * @property int $grantid
 * @property string $oldstdno
 */
class Scholars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%scholars}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbReg');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['syear'], 'number'],
            [['grantid'], 'integer'],
            [['oldstdno'], 'required'],
            [['studid', 'oldstdno'], 'string', 'max' => 15],
            [['ssem'], 'string', 'max' => 2],
            [['studid', 'ssem', 'syear'], 'unique', 'targetAttribute' => ['studid', 'ssem', 'syear']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'schoid' => Yii::t('app', 'Schoid'),
            'studid' => Yii::t('app', 'Studid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'grantid' => Yii::t('app', 'Grantid'),
            'oldstdno' => Yii::t('app', 'Oldstdno'),
        ];
    }
}
