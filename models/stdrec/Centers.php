<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%centers}}".
 *
 * @property int $lcid
 * @property string $lccoordinator
 * @property string $lcemail
 * @property string $lcname
 * @property string $lctitle
 * @property string $lcaddress
 * @property string $lcphone
 * @property int $pickup
 * @property int $tcenter
 * @property string $examvenue
 * @property int $inactive
 * @property string $regdate
 * @property string $regtime
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
        return Yii::$app->get('dbStdrec');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lcaddress', 'examvenue'], 'required'],
            [['lcaddress', 'examvenue'], 'string'],
            [['pickup', 'tcenter', 'inactive'], 'integer'],
            [['lccoordinator', 'regtime'], 'string', 'max' => 50],
            [['lcemail', 'lcphone', 'regdate'], 'string', 'max' => 100],
            [['lcname'], 'string', 'max' => 30],
            [['lctitle'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lcid' => Yii::t('app', 'Lcid'),
            'lccoordinator' => Yii::t('app', 'Lccoordinator'),
            'lcemail' => Yii::t('app', 'Lcemail'),
            'lcname' => Yii::t('app', 'Lcname'),
            'lctitle' => Yii::t('app', 'Lctitle'),
            'lcaddress' => Yii::t('app', 'Lcaddress'),
            'lcphone' => Yii::t('app', 'Lcphone'),
            'pickup' => Yii::t('app', 'Pickup'),
            'tcenter' => Yii::t('app', 'Tcenter'),
            'examvenue' => Yii::t('app', 'Examvenue'),
            'inactive' => Yii::t('app', 'Inactive'),
            'regdate' => Yii::t('app', 'Regdate'),
            'regtime' => Yii::t('app', 'Regtime'),
        ];
    }
}
