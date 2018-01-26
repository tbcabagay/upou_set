<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%qtea}}".
 *
 * @property int $qteaid
 * @property string $ssem
 * @property string $syear
 * @property string $studid
 */
class Qtea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qtea}}';
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
            [['ssem'], 'string', 'max' => 2],
            [['studid'], 'string', 'max' => 15],
            [['ssem', 'syear', 'studid'], 'unique', 'targetAttribute' => ['ssem', 'syear', 'studid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qteaid' => Yii::t('app', 'Qteaid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'studid' => Yii::t('app', 'Studid'),
        ];
    }
}
