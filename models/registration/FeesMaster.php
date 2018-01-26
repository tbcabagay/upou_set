<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%fees_master}}".
 *
 * @property int $feeid
 * @property string $feedesc
 * @property string $feecode
 * @property string $foreigner
 * @property string $foreigntype
 * @property string $others
 * @property int $undergrad
 * @property int $nonassessment
 * @property string $termapply
 * @property int $notresidency
 *
 * @property FeesCommon $feesCommon
 * @property FeesCrs[] $feesCrs
 * @property FeesProg[] $feesProgs
 */
class FeesMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fees_master}}';
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
            [['foreigner', 'others'], 'number'],
            [['undergrad', 'nonassessment', 'notresidency'], 'integer'],
            [['nonassessment'], 'required'],
            [['feedesc'], 'string', 'max' => 50],
            [['feecode', 'foreigntype', 'termapply'], 'string', 'max' => 15],
            [['feecode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'feeid' => Yii::t('app', 'Feeid'),
            'feedesc' => Yii::t('app', 'Feedesc'),
            'feecode' => Yii::t('app', 'Feecode'),
            'foreigner' => Yii::t('app', 'Foreigner'),
            'foreigntype' => Yii::t('app', 'Foreigntype'),
            'others' => Yii::t('app', 'Others'),
            'undergrad' => Yii::t('app', 'Undergrad'),
            'nonassessment' => Yii::t('app', 'Nonassessment'),
            'termapply' => Yii::t('app', 'Termapply'),
            'notresidency' => Yii::t('app', 'Notresidency'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeesCommon()
    {
        return $this->hasOne(FeesCommon::className(), ['feeid' => 'feeid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeesCrs()
    {
        return $this->hasMany(FeesCrs::className(), ['feeid' => 'feeid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeesProgs()
    {
        return $this->hasMany(FeesProg::className(), ['feeid' => 'feeid']);
    }
}
