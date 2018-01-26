<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%readmission}}".
 *
 * @property string $studid
 * @property int $progid
 * @property string $date
 * @property string $remarks
 * @property string $rsem
 * @property string $ryear
 * @property string $adstatus
 * @property int $recid
 */
class Readmission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%readmission}}';
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
            [['progid'], 'integer'],
            [['date'], 'safe'],
            [['remarks', 'adstatus'], 'required'],
            [['remarks'], 'string'],
            [['ryear'], 'number'],
            [['studid', 'adstatus'], 'string', 'max' => 15],
            [['rsem'], 'string', 'max' => 2],
            [['studid', 'progid', 'date'], 'unique', 'targetAttribute' => ['studid', 'progid', 'date']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'date' => Yii::t('app', 'Date'),
            'remarks' => Yii::t('app', 'Remarks'),
            'rsem' => Yii::t('app', 'Rsem'),
            'ryear' => Yii::t('app', 'Ryear'),
            'adstatus' => Yii::t('app', 'Adstatus'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }
}
