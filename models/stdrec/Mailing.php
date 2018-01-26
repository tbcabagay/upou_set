<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%mailing}}".
 *
 * @property string $studid
 * @property string $fullname
 */
class Mailing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mailing}}';
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
            [['studid'], 'string', 'max' => 15],
            [['fullname'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'fullname' => Yii::t('app', 'Fullname'),
        ];
    }
}
