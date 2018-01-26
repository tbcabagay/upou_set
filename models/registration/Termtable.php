<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%termtable}}".
 *
 * @property string $syear
 * @property string $ssem
 * @property string $semcode
 * @property string $semdesc
 */
class Termtable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%termtable}}';
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
            [['syear'], 'number'],
            [['semcode', 'semdesc'], 'required'],
            [['ssem'], 'string', 'max' => 2],
            [['semcode'], 'string', 'max' => 8],
            [['semdesc'], 'string', 'max' => 35],
            [['semcode'], 'unique'],
            [['semdesc'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'syear' => Yii::t('app', 'Syear'),
            'ssem' => Yii::t('app', 'Ssem'),
            'semcode' => Yii::t('app', 'Semcode'),
            'semdesc' => Yii::t('app', 'Semdesc'),
        ];
    }
}
