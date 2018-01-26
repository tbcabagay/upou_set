<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%appgrad}}".
 *
 * @property int $appgradid
 * @property string $studid
 * @property int $progid
 * @property string $appdate
 */
class Appgrad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appgrad}}';
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
            [['studid', 'progid', 'appdate'], 'required'],
            [['progid'], 'integer'],
            [['appdate'], 'safe'],
            [['studid'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appgradid' => Yii::t('app', 'Appgradid'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'appdate' => Yii::t('app', 'Appdate'),
        ];
    }
}
