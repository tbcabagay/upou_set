<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%regfees}}".
 *
 * @property int $regid
 * @property int $feeid
 * @property string $feedesc
 * @property string $amount
 * @property string $feecode
 * @property int $sais
 *
 * @property Registration $reg
 */
class Regfees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%regfees}}';
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
            [['regid', 'feeid', 'feedesc', 'sais'], 'required'],
            [['regid', 'feeid', 'sais'], 'integer'],
            [['amount'], 'number'],
            [['feedesc'], 'string', 'max' => 50],
            [['feecode'], 'string', 'max' => 10],
            [['regid', 'feedesc', 'feeid'], 'unique', 'targetAttribute' => ['regid', 'feedesc', 'feeid']],
            [['regid', 'feeid', 'feedesc'], 'unique', 'targetAttribute' => ['regid', 'feeid', 'feedesc']],
            [['regid'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['regid' => 'regid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'regid' => Yii::t('app', 'Regid'),
            'feeid' => Yii::t('app', 'Feeid'),
            'feedesc' => Yii::t('app', 'Feedesc'),
            'amount' => Yii::t('app', 'Amount'),
            'feecode' => Yii::t('app', 'Feecode'),
            'sais' => Yii::t('app', 'Sais'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['regid' => 'regid']);
    }
}
