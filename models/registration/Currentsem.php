<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%currentsem}}".
 *
 * @property int $semid
 * @property string $ssem
 * @property string $syear
 * @property string $fromdate
 * @property string $todate
 */
class Currentsem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%currentsem}}';
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
            [['fromdate', 'todate'], 'safe'],
            [['ssem'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'semid' => Yii::t('app', 'Semid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'fromdate' => Yii::t('app', 'Fromdate'),
            'todate' => Yii::t('app', 'Todate'),
        ];
    }
}
