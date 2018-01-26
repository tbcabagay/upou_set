<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%deans}}".
 *
 * @property string $code
 * @property string $title
 * @property string $email
 * @property string $fsecname
 * @property string $fsecemail
 * @property string $website
 * @property int $recid
 */
class Deans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%deans}}';
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
            [['fsecname', 'fsecemail'], 'required'],
            [['code'], 'string', 'max' => 15],
            [['title', 'website'], 'string', 'max' => 100],
            [['email', 'fsecname', 'fsecemail'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('app', 'Code'),
            'title' => Yii::t('app', 'Title'),
            'email' => Yii::t('app', 'Email'),
            'fsecname' => Yii::t('app', 'Fsecname'),
            'fsecemail' => Yii::t('app', 'Fsecemail'),
            'website' => Yii::t('app', 'Website'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }
}
