<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%acad_calendar}}".
 *
 * @property int $recid
 * @property int $actid
 * @property string $date
 * @property string $ssem
 * @property string $syear
 */
class AcadCalendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%acad_calendar}}';
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
            [['actid'], 'integer'],
            [['date'], 'safe'],
            [['syear'], 'number'],
            [['ssem'], 'string', 'max' => 2],
            [['actid', 'ssem', 'syear'], 'unique', 'targetAttribute' => ['actid', 'ssem', 'syear']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'actid' => Yii::t('app', 'Actid'),
            'date' => Yii::t('app', 'Date'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
        ];
    }
}
