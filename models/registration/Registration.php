<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%registration}}".
 *
 * @property int $regid
 * @property string $ssem
 * @property string $syear
 * @property string $studid
 * @property int $progid
 * @property int $majid
 * @property int $lcid
 * @property int $grantid
 * @property string $grantamount
 * @property string $discount
 * @property string $loanamount
 * @property string $otherfees
 * @property string $amountpaid
 * @property string $bankcharge
 * @property string $paytype
 * @property string $paydate
 * @property string $regstat
 * @property string $lastlog
 * @property string $delmode
 * @property string $deltype
 * @property string $localadd
 * @property string $foreignadd
 * @property string $paylocal
 * @property string $payforeign
 * @property int $dellcid
 * @property int $delaction
 * @property string $enrolleddate
 * @property string $payrefno
 * @property string $ouemailadd
 * @property string $ouemailaddcsv
 * @property int $proof
 * @property string $diff
 * @property string $courseids
 * @property string $changematdate
 * @property int $proclcid
 * @property string $lastupdate
 * @property string $oldstudid
 * @property string $newstudid
 * @property string $remarks
 * @property int $qtea
 * @property string $tuition
 * @property string $otherfee
 * @property string $totalfees
 * @property string $subsidy
 * @property string $waiver
 * @property string $payable
 *
 * @property Regcourse[] $regcourses
 * @property Regfees[] $regfees
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%registration}}';
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
            [['syear', 'grantamount', 'discount', 'loanamount', 'otherfees', 'amountpaid', 'bankcharge', 'diff', 'tuition', 'otherfee', 'totalfees', 'subsidy', 'waiver', 'payable'], 'number'],
            [['progid', 'majid', 'lcid', 'grantid', 'dellcid', 'delaction', 'proof', 'proclcid', 'qtea'], 'integer'],
            [['paydate', 'lastlog', 'enrolleddate', 'ouemailaddcsv', 'changematdate', 'lastupdate'], 'safe'],
            [['localadd', 'foreignadd', 'proclcid', 'lastupdate'], 'required'],
            [['localadd', 'foreignadd', 'courseids', 'remarks'], 'string'],
            [['ssem'], 'string', 'max' => 2],
            [['studid', 'regstat', 'delmode', 'deltype'], 'string', 'max' => 15],
            [['paytype', 'payrefno'], 'string', 'max' => 20],
            [['paylocal', 'payforeign'], 'string', 'max' => 3],
            [['ouemailadd'], 'string', 'max' => 80],
            [['oldstudid', 'newstudid'], 'string', 'max' => 13],
            [['ssem', 'syear', 'studid'], 'unique', 'targetAttribute' => ['ssem', 'syear', 'studid']],
            [['ssem', 'syear', 'studid', 'progid'], 'unique', 'targetAttribute' => ['ssem', 'syear', 'studid', 'progid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'regid' => Yii::t('app', 'Regid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
            'lcid' => Yii::t('app', 'Lcid'),
            'grantid' => Yii::t('app', 'Grantid'),
            'grantamount' => Yii::t('app', 'Grantamount'),
            'discount' => Yii::t('app', 'Discount'),
            'loanamount' => Yii::t('app', 'Loanamount'),
            'otherfees' => Yii::t('app', 'Otherfees'),
            'amountpaid' => Yii::t('app', 'Amountpaid'),
            'bankcharge' => Yii::t('app', 'Bankcharge'),
            'paytype' => Yii::t('app', 'Paytype'),
            'paydate' => Yii::t('app', 'Paydate'),
            'regstat' => Yii::t('app', 'Regstat'),
            'lastlog' => Yii::t('app', 'Lastlog'),
            'delmode' => Yii::t('app', 'Delmode'),
            'deltype' => Yii::t('app', 'Deltype'),
            'localadd' => Yii::t('app', 'Localadd'),
            'foreignadd' => Yii::t('app', 'Foreignadd'),
            'paylocal' => Yii::t('app', 'Paylocal'),
            'payforeign' => Yii::t('app', 'Payforeign'),
            'dellcid' => Yii::t('app', 'Dellcid'),
            'delaction' => Yii::t('app', 'Delaction'),
            'enrolleddate' => Yii::t('app', 'Enrolleddate'),
            'payrefno' => Yii::t('app', 'Payrefno'),
            'ouemailadd' => Yii::t('app', 'Ouemailadd'),
            'ouemailaddcsv' => Yii::t('app', 'Ouemailaddcsv'),
            'proof' => Yii::t('app', 'Proof'),
            'diff' => Yii::t('app', 'Diff'),
            'courseids' => Yii::t('app', 'Courseids'),
            'changematdate' => Yii::t('app', 'Changematdate'),
            'proclcid' => Yii::t('app', 'Proclcid'),
            'lastupdate' => Yii::t('app', 'Lastupdate'),
            'oldstudid' => Yii::t('app', 'Oldstudid'),
            'newstudid' => Yii::t('app', 'Newstudid'),
            'remarks' => Yii::t('app', 'Remarks'),
            'qtea' => Yii::t('app', 'Qtea'),
            'tuition' => Yii::t('app', 'Tuition'),
            'otherfee' => Yii::t('app', 'Otherfee'),
            'totalfees' => Yii::t('app', 'Totalfees'),
            'subsidy' => Yii::t('app', 'Subsidy'),
            'waiver' => Yii::t('app', 'Waiver'),
            'payable' => Yii::t('app', 'Payable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegcourses()
    {
        return $this->hasMany(Regcourse::className(), ['regid' => 'regid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegfees()
    {
        return $this->hasMany(Regfees::className(), ['regid' => 'regid']);
    }
}
