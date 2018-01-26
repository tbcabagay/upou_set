<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%fic}}".
 *
 * @property int $ficid
 * @property string $lname
 * @property string $fname
 * @property string $mname
 * @property string $email
 * @property string $contactno
 * @property string $username
 * @property resource $password
 * @property string $faculty
 */
class Fic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fic}}';
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
            [['lname', 'fname', 'mname'], 'string', 'max' => 35],
            [['email'], 'string', 'max' => 80],
            [['contactno'], 'string', 'max' => 50],
            [['username'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 32],
            [['faculty'], 'string', 'max' => 30],
            [['lname', 'fname', 'mname'], 'unique', 'targetAttribute' => ['lname', 'fname', 'mname']],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ficid' => Yii::t('app', 'Ficid'),
            'lname' => Yii::t('app', 'Lname'),
            'fname' => Yii::t('app', 'Fname'),
            'mname' => Yii::t('app', 'Mname'),
            'email' => Yii::t('app', 'Email'),
            'contactno' => Yii::t('app', 'Contactno'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'faculty' => Yii::t('app', 'Faculty'),
        ];
    }
}
