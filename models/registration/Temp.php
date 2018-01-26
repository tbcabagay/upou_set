<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%temp}}".
 *
 * @property string $studid
 * @property string $appdate
 * @property string $appstatus
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
        return Yii::$app->get('dbReg');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['appdate'], 'safe'],
            [['studid'], 'string', 'max' => 15],
            [['appstatus'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'appdate' => Yii::t('app', 'Appdate'),
            'appstatus' => Yii::t('app', 'Appstatus'),
        ];
    }
}
