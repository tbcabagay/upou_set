<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%mailingfee}}".
 *
 * @property string $fee
 */
class Mailingfee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mailingfee}}';
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
            [['fee'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fee' => Yii::t('app', 'Fee'),
        ];
    }
}
