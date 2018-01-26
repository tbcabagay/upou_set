<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%logs}}".
 *
 * @property string $logip
 * @property string $logdate
 * @property string $username
 * @property string $hacktext
 * @property string $newhacktext
 * @property int $active
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%logs}}';
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
            [['logip', 'logdate', 'username'], 'required'],
            [['logdate'], 'safe'],
            [['hacktext', 'newhacktext'], 'string'],
            [['active'], 'integer'],
            [['logip', 'username'], 'string', 'max' => 20],
            [['logip', 'logdate', 'username'], 'unique', 'targetAttribute' => ['logip', 'logdate', 'username']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'logip' => Yii::t('app', 'Logip'),
            'logdate' => Yii::t('app', 'Logdate'),
            'username' => Yii::t('app', 'Username'),
            'hacktext' => Yii::t('app', 'Hacktext'),
            'newhacktext' => Yii::t('app', 'Newhacktext'),
            'active' => Yii::t('app', 'Active'),
        ];
    }
}
