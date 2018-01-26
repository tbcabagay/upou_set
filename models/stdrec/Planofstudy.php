<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%planofstudy}}".
 *
 * @property int $psid
 * @property int $progid
 * @property int $majid
 */
class Planofstudy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%planofstudy}}';
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
            [['progid', 'majid'], 'integer'],
            [['progid', 'majid'], 'unique', 'targetAttribute' => ['progid', 'majid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'psid' => Yii::t('app', 'Psid'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
        ];
    }
}
