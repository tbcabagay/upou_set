<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%countries}}".
 *
 * @property string $code
 * @property string $country
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%countries}}';
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
            [['code'], 'required'],
            [['code'], 'string', 'max' => 4],
            [['country'], 'string', 'max' => 45],
            [['code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('app', 'Code'),
            'country' => Yii::t('app', 'Country'),
        ];
    }
}
