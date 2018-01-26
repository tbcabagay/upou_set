<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%apploa}}".
 *
 * @property int $apploaid
 * @property string $studid
 * @property string $fterm
 * @property string $tterm
 * @property string $appdate
 * @property string $apptype
 * @property string $reason
 * @property string $appstatus
 * @property string $appstatusdate
 * @property string $allow_override
 * @property string $amount
 * @property string $paytype
 * @property string $paydate
 *
 * @property ApploaDtl[] $apploaDtls
 */
class Apploa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%apploa}}';
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
            [['appdate', 'appstatusdate', 'allow_override', 'paydate'], 'safe'],
            [['apptype', 'reason'], 'string'],
            [['amount'], 'number'],
            [['studid', 'appstatus'], 'string', 'max' => 15],
            [['fterm', 'tterm'], 'string', 'max' => 7],
            [['paytype'], 'string', 'max' => 20],
            [['studid', 'fterm', 'tterm'], 'unique', 'targetAttribute' => ['studid', 'fterm', 'tterm']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'apploaid' => Yii::t('app', 'Apploaid'),
            'studid' => Yii::t('app', 'Studid'),
            'fterm' => Yii::t('app', 'Fterm'),
            'tterm' => Yii::t('app', 'Tterm'),
            'appdate' => Yii::t('app', 'Appdate'),
            'apptype' => Yii::t('app', 'Apptype'),
            'reason' => Yii::t('app', 'Reason'),
            'appstatus' => Yii::t('app', 'Appstatus'),
            'appstatusdate' => Yii::t('app', 'Appstatusdate'),
            'allow_override' => Yii::t('app', 'Allow Override'),
            'amount' => Yii::t('app', 'Amount'),
            'paytype' => Yii::t('app', 'Paytype'),
            'paydate' => Yii::t('app', 'Paydate'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApploaDtls()
    {
        return $this->hasMany(ApploaDtl::className(), ['apploaid' => 'apploaid']);
    }
}
