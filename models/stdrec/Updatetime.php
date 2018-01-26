<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%updatetime}}".
 *
 * @property string $btime1
 * @property string $btime2
 * @property string $btime3
 */
class Updatetime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%updatetime}}';
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
            [['btime1', 'btime2', 'btime3'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'btime1' => Yii::t('app', 'Btime1'),
            'btime2' => Yii::t('app', 'Btime2'),
            'btime3' => Yii::t('app', 'Btime3'),
        ];
    }
}
