<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%adletters}}".
 *
 * @property int $letterid
 * @property string $lettername
 * @property string $letter
 * @property int $unitid
 * @property string $query
 */
class Adletters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%adletters}}';
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
            [['letter', 'query'], 'required'],
            [['letter', 'query'], 'string'],
            [['unitid'], 'integer'],
            [['lettername'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'letterid' => Yii::t('app', 'Letterid'),
            'lettername' => Yii::t('app', 'Lettername'),
            'letter' => Yii::t('app', 'Letter'),
            'unitid' => Yii::t('app', 'Unitid'),
            'query' => Yii::t('app', 'Query'),
        ];
    }
}
