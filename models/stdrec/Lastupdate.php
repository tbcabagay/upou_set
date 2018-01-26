<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%lastupdate}}".
 *
 * @property string $lastupdate
 * @property string $updatetype
 */
class Lastupdate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lastupdate}}';
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
            [['lastupdate'], 'safe'],
            [['updatetype'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lastupdate' => Yii::t('app', 'Lastupdate'),
            'updatetype' => Yii::t('app', 'Updatetype'),
        ];
    }
}
