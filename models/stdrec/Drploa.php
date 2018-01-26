<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%drploa}}".
 *
 * @property int $drploaid
 * @property string $date
 * @property string $studid
 * @property int $progid
 * @property string $fromsem
 * @property string $fromyear
 * @property string $tosem
 * @property string $toyear
 * @property string $enrollsem
 * @property string $enrollyear
 * @property string $ftype
 *
 * @property DrpCourse[] $drpCourses
 */
class Drploa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%drploa}}';
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
            [['date'], 'safe'],
            [['progid'], 'integer'],
            [['fromyear', 'toyear', 'enrollyear'], 'number'],
            [['ftype'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['fromsem', 'tosem', 'enrollsem'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'drploaid' => Yii::t('app', 'Drploaid'),
            'date' => Yii::t('app', 'Date'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'fromsem' => Yii::t('app', 'Fromsem'),
            'fromyear' => Yii::t('app', 'Fromyear'),
            'tosem' => Yii::t('app', 'Tosem'),
            'toyear' => Yii::t('app', 'Toyear'),
            'enrollsem' => Yii::t('app', 'Enrollsem'),
            'enrollyear' => Yii::t('app', 'Enrollyear'),
            'ftype' => Yii::t('app', 'Ftype'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrpCourses()
    {
        return $this->hasMany(DrpCourse::className(), ['drploaid' => 'drploaid']);
    }
}
