<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%prog_major}}".
 *
 * @property int $pmid
 * @property int $progid
 * @property int $majid
 */
class ProgMajor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prog_major}}';
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
            'pmid' => Yii::t('app', 'Pmid'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
        ];
    }
}
