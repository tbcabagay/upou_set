<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%studterm}}".
 *
 * @property string $gryear
 * @property string $grsem
 * @property string $studid
 * @property int $progid
 */
class Studterm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%studterm}}';
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
            [['grsem'], 'string'],
            [['progid'], 'integer'],
            [['gryear'], 'string', 'max' => 4],
            [['studid'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gryear' => Yii::t('app', 'Gryear'),
            'grsem' => Yii::t('app', 'Grsem'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
        ];
    }
}
