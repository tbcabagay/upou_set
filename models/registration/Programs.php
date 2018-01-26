<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%programs}}".
 *
 * @property int $progid
 * @property string $progcode
 * @property string $progdesc
 * @property string $units
 * @property string $maxunitspersem
 * @property string $faculty
 * @property int $trimestral
 * @property int $undergrad
 * @property string $email
 * @property string $emailb
 * @property string $progtype
 * @property string $admitreq
 * @property int $messenger
 * @property int $no_loa_awol
 * @property string $progmrr
 * @property string $progterm
 * @property int $inactive
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%programs}}';
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
            [['units', 'maxunitspersem', 'progmrr'], 'number'],
            [['trimestral', 'undergrad', 'messenger', 'no_loa_awol', 'inactive'], 'integer'],
            [['email', 'emailb', 'progtype', 'admitreq', 'messenger', 'no_loa_awol', 'inactive'], 'required'],
            [['admitreq'], 'string'],
            [['progcode', 'progtype'], 'string', 'max' => 15],
            [['progdesc'], 'string', 'max' => 150],
            [['faculty'], 'string', 'max' => 8],
            [['email', 'emailb'], 'string', 'max' => 50],
            [['progterm'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'progid' => Yii::t('app', 'Progid'),
            'progcode' => Yii::t('app', 'Progcode'),
            'progdesc' => Yii::t('app', 'Progdesc'),
            'units' => Yii::t('app', 'Units'),
            'maxunitspersem' => Yii::t('app', 'Maxunitspersem'),
            'faculty' => Yii::t('app', 'Faculty'),
            'trimestral' => Yii::t('app', 'Trimestral'),
            'undergrad' => Yii::t('app', 'Undergrad'),
            'email' => Yii::t('app', 'Email'),
            'emailb' => Yii::t('app', 'Emailb'),
            'progtype' => Yii::t('app', 'Progtype'),
            'admitreq' => Yii::t('app', 'Admitreq'),
            'messenger' => Yii::t('app', 'Messenger'),
            'no_loa_awol' => Yii::t('app', 'No Loa Awol'),
            'progmrr' => Yii::t('app', 'Progmrr'),
            'progterm' => Yii::t('app', 'Progterm'),
            'inactive' => Yii::t('app', 'Inactive'),
        ];
    }
}
