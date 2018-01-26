<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%compre}}".
 *
 * @property int $compreid
 * @property string $studid
 * @property int $progid
 * @property string $date1
 * @property string $t1_exam1
 * @property string $t1_exam2
 * @property string $date2
 * @property string $t2_exam1
 * @property string $t2_exam2
 * @property string $remarks1
 * @property string $remarks2
 */
class Compre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%compre}}';
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
            [['date1', 'date2'], 'safe'],
            [['remarks1', 'remarks2'], 'required'],
            [['remarks1', 'remarks2'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['t1_exam1', 't1_exam2', 't2_exam1', 't2_exam2'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'compreid' => Yii::t('app', 'Compreid'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'date1' => Yii::t('app', 'Date1'),
            't1_exam1' => Yii::t('app', 'T1 Exam1'),
            't1_exam2' => Yii::t('app', 'T1 Exam2'),
            'date2' => Yii::t('app', 'Date2'),
            't2_exam1' => Yii::t('app', 'T2 Exam1'),
            't2_exam2' => Yii::t('app', 'T2 Exam2'),
            'remarks1' => Yii::t('app', 'Remarks1'),
            'remarks2' => Yii::t('app', 'Remarks2'),
        ];
    }
}
