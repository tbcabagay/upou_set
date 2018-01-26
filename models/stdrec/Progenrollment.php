<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%progenrollment}}".
 *
 * @property string $ssem
 * @property string $syear
 * @property string $studid
 * @property int $progid
 * @property string $gender
 * @property string $batch
 * @property int $lcid
 * @property string $hmunicipality
 * @property string $hprovince
 * @property string $oprovince
 * @property string $hcountry
 * @property string $ocountry
 * @property int $units
 */
class Progenrollment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%progenrollment}}';
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
            [['syear'], 'number'],
            [['progid', 'lcid', 'units'], 'integer'],
            [['ssem'], 'string', 'max' => 2],
            [['studid'], 'string', 'max' => 15],
            [['gender'], 'string', 'max' => 6],
            [['batch'], 'string', 'max' => 7],
            [['hmunicipality'], 'string', 'max' => 50],
            [['hprovince', 'oprovince', 'hcountry', 'ocountry'], 'string', 'max' => 35],
            [['ssem', 'syear', 'studid', 'progid'], 'unique', 'targetAttribute' => ['ssem', 'syear', 'studid', 'progid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'gender' => Yii::t('app', 'Gender'),
            'batch' => Yii::t('app', 'Batch'),
            'lcid' => Yii::t('app', 'Lcid'),
            'hmunicipality' => Yii::t('app', 'Hmunicipality'),
            'hprovince' => Yii::t('app', 'Hprovince'),
            'oprovince' => Yii::t('app', 'Oprovince'),
            'hcountry' => Yii::t('app', 'Hcountry'),
            'ocountry' => Yii::t('app', 'Ocountry'),
            'units' => Yii::t('app', 'Units'),
        ];
    }
}
