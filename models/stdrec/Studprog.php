<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%studprog}}".
 *
 * @property string $studid
 * @property int $progid
 * @property int $majid
 * @property string $batch
 * @property double $unitsearned
 * @property string $lastterm
 * @property string $dategraduated
 * @property int $currid
 */
class Studprog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%studprog}}';
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
            [['progid', 'majid', 'currid'], 'integer'],
            [['unitsearned'], 'number'],
            [['lastterm'], 'string'],
            [['dategraduated'], 'safe'],
            [['studid'], 'string', 'max' => 15],
            [['batch'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
            'batch' => Yii::t('app', 'Batch'),
            'unitsearned' => Yii::t('app', 'Unitsearned'),
            'lastterm' => Yii::t('app', 'Lastterm'),
            'dategraduated' => Yii::t('app', 'Dategraduated'),
            'currid' => Yii::t('app', 'Currid'),
        ];
    }
}
