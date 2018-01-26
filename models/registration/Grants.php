<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%grants}}".
 *
 * @property int $grantid
 * @property string $grantcode
 * @property string $grantname
 * @property string $schotype
 * @property string $funding
 */
class Grants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%grants}}';
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
            [['schotype'], 'string'],
            [['grantcode'], 'string', 'max' => 30],
            [['grantname'], 'string', 'max' => 150],
            [['funding'], 'string', 'max' => 10],
            [['grantcode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grantid' => Yii::t('app', 'Grantid'),
            'grantcode' => Yii::t('app', 'Grantcode'),
            'grantname' => Yii::t('app', 'Grantname'),
            'schotype' => Yii::t('app', 'Schotype'),
            'funding' => Yii::t('app', 'Funding'),
        ];
    }
}
