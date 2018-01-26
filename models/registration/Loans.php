<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%loans}}".
 *
 * @property int $loanid
 * @property string $studid
 * @property string $ssem
 * @property string $syear
 * @property string $amount
 */
class Loans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%loans}}';
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
            [['ssem'], 'required'],
            [['syear', 'amount'], 'number'],
            [['studid'], 'string', 'max' => 15],
            [['ssem'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loanid' => Yii::t('app', 'Loanid'),
            'studid' => Yii::t('app', 'Studid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'amount' => Yii::t('app', 'Amount'),
        ];
    }
}
