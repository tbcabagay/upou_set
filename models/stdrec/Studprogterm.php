<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%studprogterm}}".
 *
 * @property string $studid
 * @property int $progid
 * @property string $lastterm
 */
class Studprogterm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%studprogterm}}';
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
            [['studid', 'progid'], 'required'],
            [['progid'], 'integer'],
            [['studid'], 'string', 'max' => 15],
            [['lastterm'], 'string', 'max' => 7],
            [['studid', 'progid'], 'unique', 'targetAttribute' => ['studid', 'progid']],
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
            'lastterm' => Yii::t('app', 'Lastterm'),
        ];
    }
}
