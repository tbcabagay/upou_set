<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%dontdelete}}".
 *
 * @property string $studid
 * @property int $progid
 * @property int $otherid
 * @property string $regstat
 */
class Dontdelete extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%dontdelete}}';
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
            [['progid', 'otherid'], 'integer'],
            [['studid', 'regstat'], 'string', 'max' => 15],
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
            'otherid' => Yii::t('app', 'Otherid'),
            'regstat' => Yii::t('app', 'Regstat'),
        ];
    }
}
