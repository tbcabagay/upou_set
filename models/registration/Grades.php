<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%grades}}".
 *
 * @property int $grid
 * @property string $studid
 * @property string $grsem
 * @property string $gryear
 * @property int $progid
 * @property int $lcid
 * @property int $crsid
 * @property string $fgrade
 * @property string $cgrade
 * @property string $remarks
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%grades}}';
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
            [['gryear'], 'number'],
            [['progid', 'lcid', 'crsid'], 'integer'],
            [['remarks'], 'required'],
            [['remarks'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['grsem'], 'string', 'max' => 1],
            [['fgrade', 'cgrade'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grid' => Yii::t('app', 'Grid'),
            'studid' => Yii::t('app', 'Studid'),
            'grsem' => Yii::t('app', 'Grsem'),
            'gryear' => Yii::t('app', 'Gryear'),
            'progid' => Yii::t('app', 'Progid'),
            'lcid' => Yii::t('app', 'Lcid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'fgrade' => Yii::t('app', 'Fgrade'),
            'cgrade' => Yii::t('app', 'Cgrade'),
            'remarks' => Yii::t('app', 'Remarks'),
        ];
    }
}
