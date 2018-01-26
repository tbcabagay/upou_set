<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%survey}}".
 *
 * @property string $studid
 * @property string $username
 * @property string $password
 * @property string $term
 */
class Survey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%survey}}';
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
            [['studid', 'username'], 'string', 'max' => 15],
            [['password', 'term'], 'string', 'max' => 10],
            [['studid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'term' => Yii::t('app', 'Term'),
        ];
    }
}
