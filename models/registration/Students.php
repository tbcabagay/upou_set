<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%students}}".
 *
 * @property string $studid
 * @property string $lname
 * @property string $fname
 * @property string $mname
 * @property string $birthdate
 * @property string $gender
 * @property string $civilstatus
 * @property int $progid
 * @property int $majid
 * @property int $lcid
 * @property string $batch
 * @property string $password
 * @property string $email
 * @property string $emailb
 * @property string $hstreet
 * @property string $htown
 * @property string $hprovince
 * @property string $hcountry
 * @property string $hzipcode
 * @property string $hregion
 * @property string $htelnoccode
 * @property string $htelnoacode
 * @property string $htelno
 * @property string $occupation
 * @property string $department
 * @property string $company
 * @property string $ostreet
 * @property string $otown
 * @property string $oprovince
 * @property string $ocountry
 * @property string $ozipcode
 * @property string $oregion
 * @property string $otelnoccode
 * @property string $otelnoacode
 * @property string $otelno
 * @property string $olocalno
 * @property string $mstreet
 * @property string $mtown
 * @property string $mprovince
 * @property string $mcountry
 * @property string $mzipcode
 * @property string $mregion
 * @property string $citizenship
 * @property string $fhstreet
 * @property string $fhtown
 * @property string $fhstate
 * @property string $fhcountry
 * @property string $fhzipcode
 * @property string $fhtelnoccode
 * @property string $fhtelnoacode
 * @property string $fhtelno
 * @property string $fcompany
 * @property string $fostreet
 * @property string $fotown
 * @property string $fostate
 * @property string $focountry
 * @property string $fozipcode
 * @property string $fotelnoccode
 * @property string $fotelnoacode
 * @property string $fotelno
 * @property string $mailingadd
 * @property int $allowed
 * @property int $disallowed
 * @property int $coursea
 * @property int $courseb
 * @property int $coursec
 * @property string $lastsem
 * @property string $effectterm
 * @property string $effectyear
 * @property string $lupdate
 * @property string $abc
 * @property string $oldstudid
 * @property string $newstudid
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%students}}';
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
            [['studid'], 'required'],
            [['birthdate', 'lupdate'], 'safe'],
            [['progid', 'majid', 'lcid', 'allowed', 'disallowed', 'coursea', 'courseb', 'coursec'], 'integer'],
            [['effectyear'], 'number'],
            [['studid', 'mailingadd', 'oldstudid', 'newstudid'], 'string', 'max' => 15],
            [['lname', 'fname', 'mname'], 'string', 'max' => 35],
            [['gender', 'htelnoccode', 'htelnoacode', 'otelnoccode', 'otelnoacode', 'fhtelnoccode', 'fhtelnoacode', 'fotelnoccode', 'fotelnoacode'], 'string', 'max' => 6],
            [['civilstatus', 'batch', 'hzipcode', 'hregion', 'ozipcode', 'oregion', 'olocalno', 'mregion', 'fhzipcode', 'fozipcode'], 'string', 'max' => 10],
            [['password'], 'string', 'max' => 32],
            [['email', 'emailb', 'htelno', 'otelno', 'citizenship', 'abc'], 'string', 'max' => 50],
            [['hstreet', 'ostreet', 'mstreet', 'fhstreet', 'fostreet'], 'string', 'max' => 80],
            [['htown', 'hprovince', 'hcountry', 'occupation', 'otown', 'oprovince', 'ocountry', 'mtown', 'mprovince', 'fhtown', 'fhstate', 'fotown', 'fostate'], 'string', 'max' => 40],
            [['department', 'company', 'fcompany'], 'string', 'max' => 100],
            [['mcountry', 'fhcountry', 'focountry'], 'string', 'max' => 4],
            [['mzipcode'], 'string', 'max' => 5],
            [['fhtelno', 'fotelno'], 'string', 'max' => 20],
            [['lastsem'], 'string', 'max' => 8],
            [['effectterm'], 'string', 'max' => 2],
            [['studid'], 'unique'],
            [['studid', 'progid'], 'unique', 'targetAttribute' => ['studid', 'progid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'lname' => Yii::t('app', 'Lname'),
            'fname' => Yii::t('app', 'Fname'),
            'mname' => Yii::t('app', 'Mname'),
            'birthdate' => Yii::t('app', 'Birthdate'),
            'gender' => Yii::t('app', 'Gender'),
            'civilstatus' => Yii::t('app', 'Civilstatus'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
            'lcid' => Yii::t('app', 'Lcid'),
            'batch' => Yii::t('app', 'Batch'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'emailb' => Yii::t('app', 'Emailb'),
            'hstreet' => Yii::t('app', 'Hstreet'),
            'htown' => Yii::t('app', 'Htown'),
            'hprovince' => Yii::t('app', 'Hprovince'),
            'hcountry' => Yii::t('app', 'Hcountry'),
            'hzipcode' => Yii::t('app', 'Hzipcode'),
            'hregion' => Yii::t('app', 'Hregion'),
            'htelnoccode' => Yii::t('app', 'Htelnoccode'),
            'htelnoacode' => Yii::t('app', 'Htelnoacode'),
            'htelno' => Yii::t('app', 'Htelno'),
            'occupation' => Yii::t('app', 'Occupation'),
            'department' => Yii::t('app', 'Department'),
            'company' => Yii::t('app', 'Company'),
            'ostreet' => Yii::t('app', 'Ostreet'),
            'otown' => Yii::t('app', 'Otown'),
            'oprovince' => Yii::t('app', 'Oprovince'),
            'ocountry' => Yii::t('app', 'Ocountry'),
            'ozipcode' => Yii::t('app', 'Ozipcode'),
            'oregion' => Yii::t('app', 'Oregion'),
            'otelnoccode' => Yii::t('app', 'Otelnoccode'),
            'otelnoacode' => Yii::t('app', 'Otelnoacode'),
            'otelno' => Yii::t('app', 'Otelno'),
            'olocalno' => Yii::t('app', 'Olocalno'),
            'mstreet' => Yii::t('app', 'Mstreet'),
            'mtown' => Yii::t('app', 'Mtown'),
            'mprovince' => Yii::t('app', 'Mprovince'),
            'mcountry' => Yii::t('app', 'Mcountry'),
            'mzipcode' => Yii::t('app', 'Mzipcode'),
            'mregion' => Yii::t('app', 'Mregion'),
            'citizenship' => Yii::t('app', 'Citizenship'),
            'fhstreet' => Yii::t('app', 'Fhstreet'),
            'fhtown' => Yii::t('app', 'Fhtown'),
            'fhstate' => Yii::t('app', 'Fhstate'),
            'fhcountry' => Yii::t('app', 'Fhcountry'),
            'fhzipcode' => Yii::t('app', 'Fhzipcode'),
            'fhtelnoccode' => Yii::t('app', 'Fhtelnoccode'),
            'fhtelnoacode' => Yii::t('app', 'Fhtelnoacode'),
            'fhtelno' => Yii::t('app', 'Fhtelno'),
            'fcompany' => Yii::t('app', 'Fcompany'),
            'fostreet' => Yii::t('app', 'Fostreet'),
            'fotown' => Yii::t('app', 'Fotown'),
            'fostate' => Yii::t('app', 'Fostate'),
            'focountry' => Yii::t('app', 'Focountry'),
            'fozipcode' => Yii::t('app', 'Fozipcode'),
            'fotelnoccode' => Yii::t('app', 'Fotelnoccode'),
            'fotelnoacode' => Yii::t('app', 'Fotelnoacode'),
            'fotelno' => Yii::t('app', 'Fotelno'),
            'mailingadd' => Yii::t('app', 'Mailingadd'),
            'allowed' => Yii::t('app', 'Allowed'),
            'disallowed' => Yii::t('app', 'Disallowed'),
            'coursea' => Yii::t('app', 'Coursea'),
            'courseb' => Yii::t('app', 'Courseb'),
            'coursec' => Yii::t('app', 'Coursec'),
            'lastsem' => Yii::t('app', 'Lastsem'),
            'effectterm' => Yii::t('app', 'Effectterm'),
            'effectyear' => Yii::t('app', 'Effectyear'),
            'lupdate' => Yii::t('app', 'Lupdate'),
            'abc' => Yii::t('app', 'Abc'),
            'oldstudid' => Yii::t('app', 'Oldstudid'),
            'newstudid' => Yii::t('app', 'Newstudid'),
        ];
    }
}
