<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%acad_activities}}".
 *
 * @property int $actid
 * @property string $activity
 */
class AcadActivities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%acad_activities}}';
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
            [['activity'], 'string', 'max' => 100],
            [['activity'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actid' => Yii::t('app', 'Actid'),
            'activity' => Yii::t('app', 'Activity'),
        ];
    }
}
