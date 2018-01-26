<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%major}}".
 *
 * @property int $majID
 * @property string $majName
 * @property string $majCode
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
        return Yii::$app->get('dbStdrec');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['majName'], 'string', 'max' => 50],
            [['majCode'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'majID' => Yii::t('app', 'Maj ID'),
            'majName' => Yii::t('app', 'Maj Name'),
            'majCode' => Yii::t('app', 'Maj Code'),
        ];
    }
}
