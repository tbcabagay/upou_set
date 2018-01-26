<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%course}}".
 *
 * @property int $crsId
 * @property string $crsNum
 * @property string $crsTitle
 * @property string $crsDesc
 * @property string $crsUnits
 * @property int $crsIsLab
 * @property int $crsPrereq
 * @property int $crsPrereqb
 * @property int $crsPrereqc
 * @property int $crsPrereqd
 * @property string $crsdiscount
 * @property string $crsfaculty
 * @property int $nonacad
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%course}}';
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
            [['crsDesc'], 'required'],
            [['crsDesc'], 'string'],
            [['crsUnits', 'crsdiscount'], 'number'],
            [['crsIsLab', 'crsPrereq', 'crsPrereqb', 'crsPrereqc', 'crsPrereqd', 'nonacad'], 'integer'],
            [['crsNum'], 'string', 'max' => 20],
            [['crsTitle'], 'string', 'max' => 120],
            [['crsfaculty'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'crsId' => Yii::t('app', 'Crs ID'),
            'crsNum' => Yii::t('app', 'Crs Num'),
            'crsTitle' => Yii::t('app', 'Crs Title'),
            'crsDesc' => Yii::t('app', 'Crs Desc'),
            'crsUnits' => Yii::t('app', 'Crs Units'),
            'crsIsLab' => Yii::t('app', 'Crs Is Lab'),
            'crsPrereq' => Yii::t('app', 'Crs Prereq'),
            'crsPrereqb' => Yii::t('app', 'Crs Prereqb'),
            'crsPrereqc' => Yii::t('app', 'Crs Prereqc'),
            'crsPrereqd' => Yii::t('app', 'Crs Prereqd'),
            'crsdiscount' => Yii::t('app', 'Crsdiscount'),
            'crsfaculty' => Yii::t('app', 'Crsfaculty'),
            'nonacad' => Yii::t('app', 'Nonacad'),
        ];
    }
}
