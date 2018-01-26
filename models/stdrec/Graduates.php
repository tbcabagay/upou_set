<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%graduates}}".
 *
 * @property string $gradStudid
 * @property int $gradProgid
 * @property int $gradMajid
 * @property string $gradBatch
 * @property string $gradSem
 * @property string $gradDate
 */
class Graduates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%graduates}}';
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
            [['gradStudid'], 'required'],
            [['gradProgid', 'gradMajid'], 'integer'],
            [['gradDate'], 'safe'],
            [['gradStudid'], 'string', 'max' => 15],
            [['gradBatch'], 'string', 'max' => 7],
            [['gradSem'], 'string', 'max' => 20],
            [['gradStudid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gradStudid' => Yii::t('app', 'Grad Studid'),
            'gradProgid' => Yii::t('app', 'Grad Progid'),
            'gradMajid' => Yii::t('app', 'Grad Majid'),
            'gradBatch' => Yii::t('app', 'Grad Batch'),
            'gradSem' => Yii::t('app', 'Grad Sem'),
            'gradDate' => Yii::t('app', 'Grad Date'),
        ];
    }
}
