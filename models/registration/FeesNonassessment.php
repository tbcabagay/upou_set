<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%fees_nonassessment}}".
 *
 * @property int $nonaid
 * @property int $feeid
 * @property string $feecode
 * @property string $feedesc
 * @property string $amount
 */
class FeesNonassessment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fees_nonassessment}}';
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
            [['feeid'], 'integer'],
            [['amount'], 'number'],
            [['feecode'], 'string', 'max' => 15],
            [['feedesc'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nonaid' => Yii::t('app', 'Nonaid'),
            'feeid' => Yii::t('app', 'Feeid'),
            'feecode' => Yii::t('app', 'Feecode'),
            'feedesc' => Yii::t('app', 'Feedesc'),
            'amount' => Yii::t('app', 'Amount'),
        ];
    }
}
