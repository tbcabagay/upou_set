<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%adreports}}".
 *
 * @property string $title
 * @property string $filename
 * @property string $query
 * @property string $memos
 * @property int $recno
 */
class Adreports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%adreports}}';
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
            [['query', 'memos'], 'required'],
            [['query', 'memos'], 'string'],
            [['title', 'filename'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => Yii::t('app', 'Title'),
            'filename' => Yii::t('app', 'Filename'),
            'query' => Yii::t('app', 'Query'),
            'memos' => Yii::t('app', 'Memos'),
            'recno' => Yii::t('app', 'Recno'),
        ];
    }
}
