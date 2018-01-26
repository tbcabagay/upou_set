<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%unitsterm}}".
 *
 * @property string $gryear
 * @property string $grsem
 * @property int $grprogid
 * @property string $studid
 * @property string $crsnum
 * @property string $grade
 * @property string $passedunits
 * @property string $crsunits
 */
class Unitsterm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%unitsterm}}';
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
            [['grsem'], 'string'],
            [['grprogid'], 'integer'],
            [['passedunits', 'crsunits'], 'number'],
            [['gryear'], 'string', 'max' => 4],
            [['studid'], 'string', 'max' => 15],
            [['crsnum'], 'string', 'max' => 20],
            [['grade'], 'string', 'max' => 10],
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
            'crsnum' => Yii::t('app', 'Crsnum'),
            'grade' => Yii::t('app', 'Grade'),
            'passedunits' => Yii::t('app', 'Passedunits'),
            'crsunits' => Yii::t('app', 'Crsunits'),
        ];
    }
}
