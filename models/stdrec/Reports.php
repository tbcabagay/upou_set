<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%reports}}".
 *
 * @property string $title
 * @property string $filename
 * @property string $query
 * @property int $recno
 * @property int $rtype
 * @property int $userno
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%reports}}';
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
            [['query'], 'required'],
            [['query'], 'string'],
            [['rtype', 'userno'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['filename'], 'string', 'max' => 30],
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
            'recno' => Yii::t('app', 'Recno'),
            'rtype' => Yii::t('app', 'Rtype'),
            'userno' => Yii::t('app', 'Userno'),
        ];
    }
}
