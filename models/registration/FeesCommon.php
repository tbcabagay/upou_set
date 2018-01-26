<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%fees_common}}".
 *
 * @property int $othfeeid
 * @property int $feeid
 * @property string $feedesc
 * @property string $amount
 * @property string $newstd
 * @property string $batch
 * @property string $perunit
 *
 * @property FeesMaster $fee
 */
class FeesCommon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fees_common}}';
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
            [['amount', 'newstd', 'perunit'], 'number'],
            [['batch'], 'required'],
            [['batch'], 'string'],
            [['feedesc'], 'string', 'max' => 50],
            [['feeid'], 'unique'],
            [['feeid'], 'exist', 'skipOnError' => true, 'targetClass' => FeesMaster::className(), 'targetAttribute' => ['feeid' => 'feeid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'othfeeid' => Yii::t('app', 'Othfeeid'),
            'feeid' => Yii::t('app', 'Feeid'),
            'feedesc' => Yii::t('app', 'Feedesc'),
            'amount' => Yii::t('app', 'Amount'),
            'newstd' => Yii::t('app', 'Newstd'),
            'batch' => Yii::t('app', 'Batch'),
            'perunit' => Yii::t('app', 'Perunit'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFee()
    {
        return $this->hasOne(FeesMaster::className(), ['feeid' => 'feeid']);
    }
}
