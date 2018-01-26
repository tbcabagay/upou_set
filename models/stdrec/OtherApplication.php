<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%other_application}}".
 *
 * @property int $recid
 * @property string $studid
 * @property string $date
 * @property string $application
 * @property string $appaction
 * @property string $remarks
 */
class OtherApplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%other_application}}';
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
            [['remarks'], 'required'],
            [['remarks'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['application'], 'string', 'max' => 35],
            [['appaction'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'studid' => Yii::t('app', 'Studid'),
            'date' => Yii::t('app', 'Date'),
            'application' => Yii::t('app', 'Application'),
            'appaction' => Yii::t('app', 'Appaction'),
            'remarks' => Yii::t('app', 'Remarks'),
        ];
    }
}
