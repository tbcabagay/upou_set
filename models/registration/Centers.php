<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%centers}}".
 *
 * @property int $lcid
 * @property string $lcname
 * @property string $lctitle
 * @property string $lcaddress
 * @property string $lcphone
 * @property int $pickup
 * @property int $tcenter
 * @property int $inactive
 */
class Centers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%centers}}';
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
            [['lcaddress'], 'required'],
            [['lcaddress'], 'string'],
            [['pickup', 'tcenter', 'inactive'], 'integer'],
            [['lcname'], 'string', 'max' => 30],
            [['lctitle'], 'string', 'max' => 200],
            [['lcphone'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lcid' => Yii::t('app', 'Lcid'),
            'lcname' => Yii::t('app', 'Lcname'),
            'lctitle' => Yii::t('app', 'Lctitle'),
            'lcaddress' => Yii::t('app', 'Lcaddress'),
            'lcphone' => Yii::t('app', 'Lcphone'),
            'pickup' => Yii::t('app', 'Pickup'),
            'tcenter' => Yii::t('app', 'Tcenter'),
            'inactive' => Yii::t('app', 'Inactive'),
        ];
    }
}
