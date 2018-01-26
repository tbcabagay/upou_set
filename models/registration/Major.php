<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%major}}".
 *
 * @property int $majID
 * @property string $majname
 * @property string $code
 */
class Major extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%major}}';
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
            [['majname'], 'string', 'max' => 35],
            [['code'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'majID' => Yii::t('app', 'Maj ID'),
            'majname' => Yii::t('app', 'Majname'),
            'code' => Yii::t('app', 'Code'),
        ];
    }
}
