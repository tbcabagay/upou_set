<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $userid
 * @property string $username
 * @property string $password
 * @property string $usertype
 * @property string $module
 * @property int $lcid
 * @property string $deans
 * @property int $registration
 * @property int $maintenance
 * @property int $microsite
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
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
            [['usertype'], 'string'],
            [['lcid', 'registration', 'maintenance', 'microsite'], 'integer'],
            [['deans', 'registration', 'maintenance', 'microsite'], 'required'],
            [['username', 'module'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 32],
            [['deans'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => Yii::t('app', 'Userid'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'usertype' => Yii::t('app', 'Usertype'),
            'module' => Yii::t('app', 'Module'),
            'lcid' => Yii::t('app', 'Lcid'),
            'deans' => Yii::t('app', 'Deans'),
            'registration' => Yii::t('app', 'Registration'),
            'maintenance' => Yii::t('app', 'Maintenance'),
            'microsite' => Yii::t('app', 'Microsite'),
        ];
    }
}
