<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%loa}}".
 *
 * @property int $loaId
 * @property string $loaDate
 * @property string $loaStudid
 * @property int $loaProgid
 * @property string $loaSemFrom
 * @property string $loaSemTo
 */
class Loa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%loa}}';
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
            [['loaDate'], 'safe'],
            [['loaProgid'], 'integer'],
            [['loaStudid'], 'string', 'max' => 15],
            [['loaSemFrom', 'loaSemTo'], 'string', 'max' => 7],
            [['loaStudid', 'loaProgid', 'loaSemFrom'], 'unique', 'targetAttribute' => ['loaStudid', 'loaProgid', 'loaSemFrom']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loaId' => Yii::t('app', 'Loa ID'),
            'loaDate' => Yii::t('app', 'Loa Date'),
            'loaStudid' => Yii::t('app', 'Loa Studid'),
            'loaProgid' => Yii::t('app', 'Loa Progid'),
            'loaSemFrom' => Yii::t('app', 'Loa Sem From'),
            'loaSemTo' => Yii::t('app', 'Loa Sem To'),
        ];
    }
}
