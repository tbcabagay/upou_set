<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%temp}}".
 *
 * @property string $studid
 * @property int $cnt
 */
class Temp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%temp}}';
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
            [['cnt'], 'integer'],
            [['studid'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'cnt' => Yii::t('app', 'Cnt'),
        ];
    }
}
