<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%messenger}}".
 *
 * @property string $date
 * @property string $studid
 * @property int $ficid
 * @property string $ssem
 * @property string $syear
 * @property string $message
 * @property string $sender
 * @property int $seen
 */
class Messenger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%messenger}}';
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
            [['date', 'studid', 'ficid', 'message', 'sender', 'seen'], 'required'],
            [['date'], 'safe'],
            [['ficid', 'seen'], 'integer'],
            [['syear'], 'number'],
            [['message'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['ssem'], 'string', 'max' => 2],
            [['sender'], 'string', 'max' => 35],
            [['date', 'studid', 'ficid'], 'unique', 'targetAttribute' => ['date', 'studid', 'ficid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'date' => Yii::t('app', 'Date'),
            'studid' => Yii::t('app', 'Studid'),
            'ficid' => Yii::t('app', 'Ficid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'message' => Yii::t('app', 'Message'),
            'sender' => Yii::t('app', 'Sender'),
            'seen' => Yii::t('app', 'Seen'),
        ];
    }
}
