<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%reduced}}".
 *
 * @property int $redid
 * @property string $studid
 * @property string $disctype
 * @property string $ssem
 * @property string $syear
 */
class Reduced extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%reduced}}';
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
            [['syear'], 'number'],
            [['studid'], 'string', 'max' => 15],
            [['disctype'], 'string', 'max' => 35],
            [['ssem'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'redid' => Yii::t('app', 'Redid'),
            'studid' => Yii::t('app', 'Studid'),
            'disctype' => Yii::t('app', 'Disctype'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
        ];
    }
}
