<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%courseeval}}".
 *
 * @property int $recid
 * @property string $studid
 * @property string $crsnum
 * @property int $crsid
 * @property string $examdate
 * @property string $score
 * @property string $remarks
 */
class Courseeval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%courseeval}}';
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
            [['crsid'], 'integer'],
            [['examdate'], 'safe'],
            [['studid', 'crsnum'], 'string', 'max' => 15],
            [['score'], 'string', 'max' => 6],
            [['remarks'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'studid' => Yii::t('app', 'Studid'),
            'crsnum' => Yii::t('app', 'Crsnum'),
            'crsid' => Yii::t('app', 'Crsid'),
            'examdate' => Yii::t('app', 'Examdate'),
            'score' => Yii::t('app', 'Score'),
            'remarks' => Yii::t('app', 'Remarks'),
        ];
    }
}
