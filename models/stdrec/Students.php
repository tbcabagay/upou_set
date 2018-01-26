<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%students}}".
 *
 * @property string $studid
 * @property string $stLname
 * @property string $stFname
 * @property string $stMname
 * @property string $stBirthdate
 * @property string $stBirthplace
 * @property string $stGender
 * @property string $stCivilstatus
 * @property string $stCitizenship
 * @property string $stEmail
 * @property string $stEmailb
 * @property string $stHstreet
 * @property string $stHtown
 * @property string $stHprovince
 * @property string $stHcountry
 * @property string $stHzipcode
 * @property string $stHregion
 * @property string $stHtelnoccode
 * @property string $stHtelnoacode
 * @property string $stHtelno
 * @property string $stOccupation
 * @property string $stDepartment
 * @property string $stCompany
 * @property string $stCstreet
 * @property string $stCtown
 * @property string $stCprovince
 * @property string $stCcountry
 * @property string $stCzipcode
 * @property string $stCregion
 * @property string $stCtelnoccode
 * @property string $stCtelnoacode
 * @property string $stCtelno
 * @property string $stClocalno
 * @property string $stMstreet
 * @property string $stMtown
 * @property string $stMprovince
 * @property string $stMcountry
 * @property string $stMzipcode
 * @property string $stMregion
 * @property string $stFhstreet
 * @property string $stFhtown
 * @property string $stFhstate
 * @property string $stFhcountry
 * @property string $stFhzipcode
 * @property string $stFhtelnoccode
 * @property string $stFhtelnoacode
 * @property string $stFhtelno
 * @property string $stFcompany
 * @property string $stFcstreet
 * @property string $stFctown
 * @property string $stFcstate
 * @property string $stFccountry
 * @property string $stFczipcode
 * @property string $stFctelnoccode
 * @property string $stFctelnoacode
 * @property string $stFctelno
 * @property string $stMailingadd
 * @property string $sthschool
 * @property string $stnceerating
 * @property string $stnceeyear
 * @property string $stsonum
 * @property string $stsodate
 * @property string $remarks
 * @property string $newstudid
 * @property string $oldstudid
 *
 * @property Grades[] $grades
 * @property Relationship[] $relationships
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
        return Yii::$app->get('dbStdrec');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['studid', 'remarks'], 'required'],
            [['stBirthdate', 'stsodate'], 'safe'],
            [['stnceeyear'], 'number'],
            [['remarks'], 'string'],
            [['studid', 'stMailingadd'], 'string', 'max' => 15],
            [['stLname', 'stFname', 'stMname', 'stHtown', 'stCtown'], 'string', 'max' => 35],
            [['stBirthplace', 'stDepartment', 'stCompany', 'stFcompany', 'sthschool'], 'string', 'max' => 100],
            [['stGender', 'stCivilstatus', 'stHzipcode', 'stHregion', 'stCzipcode', 'stCregion', 'stClocalno', 'stMregion', 'stFhzipcode', 'stFczipcode'], 'string', 'max' => 10],
            [['stCitizenship'], 'string', 'max' => 25],
            [['stEmail', 'stEmailb', 'stHtelno', 'stCtelno'], 'string', 'max' => 50],
            [['stHstreet', 'stCstreet', 'stMstreet', 'stFhstreet', 'stFcstreet'], 'string', 'max' => 80],
            [['stHprovince', 'stHcountry', 'stOccupation', 'stCprovince', 'stCcountry', 'stMtown', 'stMprovince', 'stFhtown', 'stFhstate', 'stFctown', 'stFcstate'], 'string', 'max' => 40],
            [['stHtelnoccode', 'stHtelnoacode', 'stCtelnoccode', 'stCtelnoacode', 'stFhtelnoccode', 'stFhtelnoacode', 'stFctelnoccode', 'stFctelnoacode'], 'string', 'max' => 6],
            [['stMcountry', 'stFhcountry', 'stFccountry'], 'string', 'max' => 4],
            [['stMzipcode'], 'string', 'max' => 5],
            [['stFhtelno', 'stFctelno', 'stnceerating', 'stsonum'], 'string', 'max' => 20],
            [['newstudid', 'oldstudid'], 'string', 'max' => 13],
            [['studid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'stLname' => Yii::t('app', 'St Lname'),
            'stFname' => Yii::t('app', 'St Fname'),
            'stMname' => Yii::t('app', 'St Mname'),
            'stBirthdate' => Yii::t('app', 'St Birthdate'),
            'stBirthplace' => Yii::t('app', 'St Birthplace'),
            'stGender' => Yii::t('app', 'St Gender'),
            'stCivilstatus' => Yii::t('app', 'St Civilstatus'),
            'stCitizenship' => Yii::t('app', 'St Citizenship'),
            'stEmail' => Yii::t('app', 'St Email'),
            'stEmailb' => Yii::t('app', 'St Emailb'),
            'stHstreet' => Yii::t('app', 'St Hstreet'),
            'stHtown' => Yii::t('app', 'St Htown'),
            'stHprovince' => Yii::t('app', 'St Hprovince'),
            'stHcountry' => Yii::t('app', 'St Hcountry'),
            'stHzipcode' => Yii::t('app', 'St Hzipcode'),
            'stHregion' => Yii::t('app', 'St Hregion'),
            'stHtelnoccode' => Yii::t('app', 'St Htelnoccode'),
            'stHtelnoacode' => Yii::t('app', 'St Htelnoacode'),
            'stHtelno' => Yii::t('app', 'St Htelno'),
            'stOccupation' => Yii::t('app', 'St Occupation'),
            'stDepartment' => Yii::t('app', 'St Department'),
            'stCompany' => Yii::t('app', 'St Company'),
            'stCstreet' => Yii::t('app', 'St Cstreet'),
            'stCtown' => Yii::t('app', 'St Ctown'),
            'stCprovince' => Yii::t('app', 'St Cprovince'),
            'stCcountry' => Yii::t('app', 'St Ccountry'),
            'stCzipcode' => Yii::t('app', 'St Czipcode'),
            'stCregion' => Yii::t('app', 'St Cregion'),
            'stCtelnoccode' => Yii::t('app', 'St Ctelnoccode'),
            'stCtelnoacode' => Yii::t('app', 'St Ctelnoacode'),
            'stCtelno' => Yii::t('app', 'St Ctelno'),
            'stClocalno' => Yii::t('app', 'St Clocalno'),
            'stMstreet' => Yii::t('app', 'St Mstreet'),
            'stMtown' => Yii::t('app', 'St Mtown'),
            'stMprovince' => Yii::t('app', 'St Mprovince'),
            'stMcountry' => Yii::t('app', 'St Mcountry'),
            'stMzipcode' => Yii::t('app', 'St Mzipcode'),
            'stMregion' => Yii::t('app', 'St Mregion'),
            'stFhstreet' => Yii::t('app', 'St Fhstreet'),
            'stFhtown' => Yii::t('app', 'St Fhtown'),
            'stFhstate' => Yii::t('app', 'St Fhstate'),
            'stFhcountry' => Yii::t('app', 'St Fhcountry'),
            'stFhzipcode' => Yii::t('app', 'St Fhzipcode'),
            'stFhtelnoccode' => Yii::t('app', 'St Fhtelnoccode'),
            'stFhtelnoacode' => Yii::t('app', 'St Fhtelnoacode'),
            'stFhtelno' => Yii::t('app', 'St Fhtelno'),
            'stFcompany' => Yii::t('app', 'St Fcompany'),
            'stFcstreet' => Yii::t('app', 'St Fcstreet'),
            'stFctown' => Yii::t('app', 'St Fctown'),
            'stFcstate' => Yii::t('app', 'St Fcstate'),
            'stFccountry' => Yii::t('app', 'St Fccountry'),
            'stFczipcode' => Yii::t('app', 'St Fczipcode'),
            'stFctelnoccode' => Yii::t('app', 'St Fctelnoccode'),
            'stFctelnoacode' => Yii::t('app', 'St Fctelnoacode'),
            'stFctelno' => Yii::t('app', 'St Fctelno'),
            'stMailingadd' => Yii::t('app', 'St Mailingadd'),
            'sthschool' => Yii::t('app', 'Sthschool'),
            'stnceerating' => Yii::t('app', 'Stnceerating'),
            'stnceeyear' => Yii::t('app', 'Stnceeyear'),
            'stsonum' => Yii::t('app', 'Stsonum'),
            'stsodate' => Yii::t('app', 'Stsodate'),
            'remarks' => Yii::t('app', 'Remarks'),
            'newstudid' => Yii::t('app', 'Newstudid'),
            'oldstudid' => Yii::t('app', 'Oldstudid'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grades::className(), ['grStudId' => 'studid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelationships()
    {
        return $this->hasMany(Relationship::className(), ['studid' => 'studid']);
    }
}
