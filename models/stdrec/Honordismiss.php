<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%honordismiss}}".
 *
 * @property int $recid
 * @property string $studid
 * @property int $progid
 * @property string $hdate
 * @property string $hreason
 */
class Honordismiss extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%honordismiss}}';
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
            [['hdate'], 'safe'],
            [['hreason'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['studid', 'progid'], 'unique', 'targetAttribute' => ['studid', 'progid']],
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
            'progid' => Yii::t('app', 'Progid'),
            'hdate' => Yii::t('app', 'Hdate'),
            'hreason' => Yii::t('app', 'Hreason'),
        ];
    }
}
