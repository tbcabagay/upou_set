<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%prog_course}}".
 *
 * @property int $curid
 * @property int $progid
 * @property int $majid
 * @property int $crsid
 */
class ProgCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prog_course}}';
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
            [['progid', 'majid', 'crsid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'curid' => Yii::t('app', 'Curid'),
            'progid' => Yii::t('app', 'Progid'),
            'majid' => Yii::t('app', 'Majid'),
            'crsid' => Yii::t('app', 'Crsid'),
        ];
    }
}
