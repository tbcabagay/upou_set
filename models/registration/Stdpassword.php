<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%stdpassword}}".
 *
 * @property string $studid
 * @property string $password
 */
class Stdpassword extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%stdpassword}}';
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
            [['studid'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'password' => Yii::t('app', 'Password'),
        ];
    }
}
