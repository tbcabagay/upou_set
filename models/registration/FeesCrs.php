<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%fees_crs}}".
 *
 * @property int $crsfeeid
 * @property int $crsid
 * @property int $feeid
 * @property string $feedesc
 * @property string $amount
 * @property string $batch
 * @property int $newstd
 * @property string $perunit
 * @property int $forstd
 *
 * @property FeesMaster $fee
 */
class FeesCrs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fees_crs}}';
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
            [['crsid', 'feeid', 'newstd', 'forstd'], 'integer'],
            [['amount', 'perunit'], 'number'],
            [['batch'], 'required'],
            [['batch'], 'string'],
            [['feedesc'], 'string', 'max' => 50],
            [['crsid', 'feeid'], 'unique', 'targetAttribute' => ['crsid', 'feeid']],
            [['feeid'], 'exist', 'skipOnError' => true, 'targetClass' => FeesMaster::className(), 'targetAttribute' => ['feeid' => 'feeid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'crsfeeid' => Yii::t('app', 'Crsfeeid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'feeid' => Yii::t('app', 'Feeid'),
            'feedesc' => Yii::t('app', 'Feedesc'),
            'amount' => Yii::t('app', 'Amount'),
            'batch' => Yii::t('app', 'Batch'),
            'newstd' => Yii::t('app', 'Newstd'),
            'perunit' => Yii::t('app', 'Perunit'),
            'forstd' => Yii::t('app', 'Forstd'),
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
