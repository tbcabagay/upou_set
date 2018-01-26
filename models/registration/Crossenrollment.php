<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%crossenrollment}}".
 *
 * @property int $crossid
 * @property string $date
 * @property string $studid
 * @property string $ssem
 * @property string $syear
 * @property string $school
 * @property string $course1
 * @property string $course2
 * @property string $course3
 * @property string $course4
 * @property string $course5
 * @property string $unit1
 * @property string $unit2
 * @property string $unit3
 * @property string $unit4
 * @property string $unit5
 * @property string $enrstatus
 */
class Crossenrollment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%crossenrollment}}';
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
            [['date', 'studid', 'ssem', 'syear', 'school', 'course1', 'course2', 'course3', 'course4', 'course5', 'unit1', 'unit2', 'unit3', 'unit4', 'unit5', 'enrstatus'], 'required'],
            [['date'], 'safe'],
            [['syear', 'unit1', 'unit2', 'unit3', 'unit4', 'unit5'], 'number'],
            [['studid', 'enrstatus'], 'string', 'max' => 15],
            [['ssem'], 'string', 'max' => 2],
            [['school'], 'string', 'max' => 150],
            [['course1', 'course2', 'course3', 'course4', 'course5'], 'string', 'max' => 20],
            [['studid', 'ssem', 'syear'], 'unique', 'targetAttribute' => ['studid', 'ssem', 'syear']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'crossid' => Yii::t('app', 'Crossid'),
            'date' => Yii::t('app', 'Date'),
            'studid' => Yii::t('app', 'Studid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'school' => Yii::t('app', 'School'),
            'course1' => Yii::t('app', 'Course1'),
            'course2' => Yii::t('app', 'Course2'),
            'course3' => Yii::t('app', 'Course3'),
            'course4' => Yii::t('app', 'Course4'),
            'course5' => Yii::t('app', 'Course5'),
            'unit1' => Yii::t('app', 'Unit1'),
            'unit2' => Yii::t('app', 'Unit2'),
            'unit3' => Yii::t('app', 'Unit3'),
            'unit4' => Yii::t('app', 'Unit4'),
            'unit5' => Yii::t('app', 'Unit5'),
            'enrstatus' => Yii::t('app', 'Enrstatus'),
        ];
    }
}
