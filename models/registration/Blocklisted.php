<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%blocklisted}}".
 *
 * @property string $logip
 * @property string $logdate
 */
class Blocklisted extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blocklisted}}';
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
            [['logdate'], 'safe'],
            [['logip'], 'string', 'max' => 20],
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
        ];
    }
}
