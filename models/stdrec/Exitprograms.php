<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%exitprograms}}".
 *
 * @property int $exitid
 * @property int $progid
 * @property int $exitprogid
 */
class Exitprograms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%exitprograms}}';
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
            [['progid', 'exitprogid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'exitid' => Yii::t('app', 'Exitid'),
            'progid' => Yii::t('app', 'Progid'),
            'exitprogid' => Yii::t('app', 'Exitprogid'),
        ];
    }
}
