<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%provinces}}".
 *
 * @property string $province
 * @property string $region
 */
class Provinces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%provinces}}';
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
            [['province'], 'required'],
            [['province'], 'string', 'max' => 40],
            [['region'], 'string', 'max' => 10],
            [['province'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province' => Yii::t('app', 'Province'),
            'region' => Yii::t('app', 'Region'),
        ];
    }
}
