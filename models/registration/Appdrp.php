<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%appdrp}}".
 *
 * @property int $appdrpid
 * @property string $studid
 * @property string $ssem
 * @property string $syear
 * @property string $appdate
 * @property string $apptype
 * @property string $reason
 * @property string $dateapproved
 * @property string $allow_override
 * @property string $amount
 * @property string $paytype
 * @property string $paydate
 * @property string $appstatus
 *
 * @property AppdrpDtl[] $appdrpDtls
 */
class Appdrp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appdrp}}';
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
            [['syear', 'amount'], 'number'],
            [['appdate', 'dateapproved', 'allow_override', 'paydate'], 'safe'],
            [['apptype', 'reason'], 'string'],
            [['studid', 'appstatus'], 'string', 'max' => 15],
            [['ssem'], 'string', 'max' => 2],
            [['paytype'], 'string', 'max' => 20],
            [['studid', 'ssem', 'syear', 'dateapproved'], 'unique', 'targetAttribute' => ['studid', 'ssem', 'syear', 'dateapproved']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appdrpid' => Yii::t('app', 'Appdrpid'),
            'studid' => Yii::t('app', 'Studid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'appdate' => Yii::t('app', 'Appdate'),
            'apptype' => Yii::t('app', 'Apptype'),
            'reason' => Yii::t('app', 'Reason'),
            'dateapproved' => Yii::t('app', 'Dateapproved'),
            'allow_override' => Yii::t('app', 'Allow Override'),
            'amount' => Yii::t('app', 'Amount'),
            'paytype' => Yii::t('app', 'Paytype'),
            'paydate' => Yii::t('app', 'Paydate'),
            'appstatus' => Yii::t('app', 'Appstatus'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppdrpDtls()
    {
        return $this->hasMany(AppdrpDtl::className(), ['appdrpid' => 'appdrpid']);
    }
}
