<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%appremove}}".
 *
 * @property string $studid
 * @property string $grsem
 * @property string $gryear
 * @property int $crsid
 * @property string $appdate
 * @property string $appstatus
 * @property string $date
 * @property string $remarks
 * @property string $allow_override
 * @property string $expired
 * @property int $recid
 */
class Appremove extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appremove}}';
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
            [['gryear'], 'number'],
            [['crsid'], 'integer'],
            [['appdate', 'date', 'allow_override', 'expired'], 'safe'],
            [['remarks'], 'string'],
            [['expired'], 'required'],
            [['studid', 'appstatus'], 'string', 'max' => 15],
            [['grsem'], 'string', 'max' => 2],
            [['studid', 'grsem', 'gryear', 'crsid', 'date'], 'unique', 'targetAttribute' => ['studid', 'grsem', 'gryear', 'crsid', 'date']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'grsem' => Yii::t('app', 'Grsem'),
            'gryear' => Yii::t('app', 'Gryear'),
            'crsid' => Yii::t('app', 'Crsid'),
            'appdate' => Yii::t('app', 'Appdate'),
            'appstatus' => Yii::t('app', 'Appstatus'),
            'date' => Yii::t('app', 'Date'),
            'remarks' => Yii::t('app', 'Remarks'),
            'allow_override' => Yii::t('app', 'Allow Override'),
            'expired' => Yii::t('app', 'Expired'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }
}
