<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%nationality}}".
 *
 * @property int $id
 * @property string $nationality
 */
class Nationality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%nationality}}';
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
            [['nationality'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nationality' => Yii::t('app', 'Nationality'),
        ];
    }
}
