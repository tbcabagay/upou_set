<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%admiss_status}}".
 *
 * @property string $studid
 * @property int $progid
 * @property string $admiss_status
 * @property string $admiss_remarks
 * @property string $admit_date
 */
class AdmissStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admiss_status}}';
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
            [['studid', 'progid', 'admiss_remarks'], 'required'],
            [['progid'], 'integer'],
            [['admiss_remarks'], 'string'],
            [['admit_date'], 'safe'],
            [['studid'], 'string', 'max' => 15],
            [['admiss_status'], 'string', 'max' => 20],
            [['studid', 'progid'], 'unique', 'targetAttribute' => ['studid', 'progid']],
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
            'admiss_status' => Yii::t('app', 'Admiss Status'),
            'admiss_remarks' => Yii::t('app', 'Admiss Remarks'),
            'admit_date' => Yii::t('app', 'Admit Date'),
        ];
    }
}
