<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%transcript}}".
 *
 * @property int $transid
 * @property string $studid
 * @property int $progid
 * @property int $majid
 * @property int $lcid
 * @property string $semadmitted
 * @property string $dategraduated
 * @property string $termgraduated
 * @property string $credentials
 * @property string $remarks
 * @property string $lastterm
 * @property string $noyears
 * @property string $batch
 * @property int $exitprogram
 * @property string $exitdate
 * @property string $discontinue
 */
class Transcript extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%transcript}}';
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
            [['progid', 'majid', 'lcid', 'exitprogram'], 'integer'],
            [['dategraduated', 'exitdate', 'discontinue'], 'safe'],
            [['credentials', 'exitprogram', 'exitdate', 'discontinue'], 'required'],
            [['credentials'], 'string'],
            [['noyears'], 'number'],
            [['studid'], 'string', 'max' => 15],
            [['semadmitted', 'termgraduated', 'batch'], 'string', 'max' => 7],
            [['remarks'], 'string', 'max' => 200],
            [['lastterm'], 'string', 'max' => 6],
            [['studid', 'progid'], 'unique', 'targetAttribute' => ['studid', 'progid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'transid' => Yii::t('app', 'Transid'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
            'lcid' => Yii::t('app', 'Lcid'),
            'semadmitted' => Yii::t('app', 'Semadmitted'),
            'dategraduated' => Yii::t('app', 'Dategraduated'),
            'termgraduated' => Yii::t('app', 'Termgraduated'),
            'credentials' => Yii::t('app', 'Credentials'),
            'remarks' => Yii::t('app', 'Remarks'),
            'lastterm' => Yii::t('app', 'Lastterm'),
            'noyears' => Yii::t('app', 'Noyears'),
            'batch' => Yii::t('app', 'Batch'),
            'exitprogram' => Yii::t('app', 'Exitprogram'),
            'exitdate' => Yii::t('app', 'Exitdate'),
            'discontinue' => Yii::t('app', 'Discontinue'),
        ];
    }
}
