<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%appid}}".
 *
 * @property int $appid
 * @property string $studid
 * @property string $appdate
 * @property string $delivery
 * @property int $lcid
 * @property string $mailingadd
 * @property string $printer
 * @property string $shipped
 * @property string $appstatus
 * @property string $appstatusdate
 * @property string $prevstatus
 * @property int $reapply
 * @property string $idfee
 * @property string $mailingfee
 * @property string $paytype
 * @property string $paydate
 * @property string $payamount
 * @property int $progid
 */
class Appid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appid}}';
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
            [['studid', 'appdate', 'delivery'], 'required'],
            [['appdate', 'printer', 'shipped', 'appstatusdate', 'paydate'], 'safe'],
            [['lcid', 'reapply', 'progid'], 'integer'],
            [['mailingadd'], 'string'],
            [['idfee', 'mailingfee', 'payamount'], 'number'],
            [['studid', 'delivery'], 'string', 'max' => 15],
            [['appstatus', 'prevstatus'], 'string', 'max' => 50],
            [['paytype'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appid' => Yii::t('app', 'Appid'),
            'studid' => Yii::t('app', 'Studid'),
            'appdate' => Yii::t('app', 'Appdate'),
            'delivery' => Yii::t('app', 'Delivery'),
            'lcid' => Yii::t('app', 'Lcid'),
            'mailingadd' => Yii::t('app', 'Mailingadd'),
            'printer' => Yii::t('app', 'Printer'),
            'shipped' => Yii::t('app', 'Shipped'),
            'appstatus' => Yii::t('app', 'Appstatus'),
            'appstatusdate' => Yii::t('app', 'Appstatusdate'),
            'prevstatus' => Yii::t('app', 'Prevstatus'),
            'reapply' => Yii::t('app', 'Reapply'),
            'idfee' => Yii::t('app', 'Idfee'),
            'mailingfee' => Yii::t('app', 'Mailingfee'),
            'paytype' => Yii::t('app', 'Paytype'),
            'paydate' => Yii::t('app', 'Paydate'),
            'payamount' => Yii::t('app', 'Payamount'),
            'progid' => Yii::t('app', 'Progid'),
        ];
    }
}
