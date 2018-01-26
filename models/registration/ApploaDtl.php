<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%apploa_dtl}}".
 *
 * @property int $apploaid
 * @property int $crsid
 * @property int $recid
 *
 * @property Apploa $apploa
 */
class ApploaDtl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%apploa_dtl}}';
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
            [['apploaid', 'crsid'], 'integer'],
            [['apploaid'], 'exist', 'skipOnError' => true, 'targetClass' => Apploa::className(), 'targetAttribute' => ['apploaid' => 'apploaid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'apploaid' => Yii::t('app', 'Apploaid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApploa()
    {
        return $this->hasOne(Apploa::className(), ['apploaid' => 'apploaid']);
    }
}
