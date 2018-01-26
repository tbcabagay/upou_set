<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%studprog}}".
 *
 * @property string $studid
 * @property int $progid
 * @property int $majid
 * @property int $lcid
 * @property string $spsem
 * @property string $spyear
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
        return Yii::$app->get('dbReg');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['progid', 'majid', 'lcid'], 'integer'],
            [['spyear'], 'number'],
            [['studid'], 'string', 'max' => 15],
            [['spsem'], 'string', 'max' => 2],
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
            'lcid' => Yii::t('app', 'Lcid'),
            'spsem' => Yii::t('app', 'Spsem'),
            'spyear' => Yii::t('app', 'Spyear'),
        ];
    }
}
