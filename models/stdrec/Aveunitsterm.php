<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%aveunitsterm}}".
 *
 * @property string $gryear
 * @property string $grsem
 * @property int $grprogid
 * @property string $studid
 * @property string $fullname
 * @property string $course
 * @property string $grades
 * @property resource $units
 * @property string $aveunits
 */
class Aveunitsterm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%aveunitsterm}}';
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
            [['grsem', 'course', 'grades', 'units'], 'string'],
            [['grprogid'], 'integer'],
            [['aveunits'], 'number'],
            [['gryear'], 'string', 'max' => 4],
            [['studid'], 'string', 'max' => 15],
            [['fullname'], 'string', 'max' => 108],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gryear' => Yii::t('app', 'Gryear'),
            'grsem' => Yii::t('app', 'Grsem'),
            'grprogid' => Yii::t('app', 'Grprogid'),
            'studid' => Yii::t('app', 'Studid'),
            'fullname' => Yii::t('app', 'Fullname'),
            'course' => Yii::t('app', 'Course'),
            'grades' => Yii::t('app', 'Grades'),
            'units' => Yii::t('app', 'Units'),
            'aveunits' => Yii::t('app', 'Aveunits'),
        ];
    }
}
