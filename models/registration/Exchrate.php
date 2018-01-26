<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%exchrate}}".
 *
 * @property string $exchrate
 */
class Exchrate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%exchrate}}';
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
            [['exchrate'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'exchrate' => Yii::t('app', 'Exchrate'),
        ];
    }
}
