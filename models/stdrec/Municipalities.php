<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%municipalities}}".
 *
 * @property int $townid
 * @property string $province
 * @property string $town
 * @property string $region
 */
class Municipalities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%municipalities}}';
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
            [['province'], 'string', 'max' => 35],
            [['town'], 'string', 'max' => 40],
            [['region'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'townid' => Yii::t('app', 'Townid'),
            'province' => Yii::t('app', 'Province'),
            'town' => Yii::t('app', 'Town'),
            'region' => Yii::t('app', 'Region'),
        ];
    }
}
