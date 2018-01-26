<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%otherschool}}".
 *
 * @property string $schcode
 * @property string $schoolname
 * @property string $address
 */
class Otherschool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%otherschool}}';
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
            [['schcode'], 'required'],
            [['schcode'], 'string', 'max' => 15],
            [['schoolname'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 150],
            [['schcode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'schcode' => Yii::t('app', 'Schcode'),
            'schoolname' => Yii::t('app', 'Schoolname'),
            'address' => Yii::t('app', 'Address'),
        ];
    }
}
