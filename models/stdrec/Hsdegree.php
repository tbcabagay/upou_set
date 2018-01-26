<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%hsdegree}}".
 *
 * @property string $schcode
 * @property string $degree
 * @property string $dategrad
 * @property string $studid
 */
class Hsdegree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hsdegree}}';
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
            [['schcode', 'degree', 'studid'], 'required'],
            [['schcode', 'studid'], 'string', 'max' => 15],
            [['degree'], 'string', 'max' => 50],
            [['dategrad'], 'string', 'max' => 30],
            [['schcode', 'degree', 'studid'], 'unique', 'targetAttribute' => ['schcode', 'degree', 'studid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'schcode' => Yii::t('app', 'Schcode'),
            'degree' => Yii::t('app', 'Degree'),
            'dategrad' => Yii::t('app', 'Dategrad'),
            'studid' => Yii::t('app', 'Studid'),
        ];
    }
}
