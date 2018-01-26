<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%test}}".
 *
 * @property string $fullname
 * @property string $emailadd
 * @property string $town
 * @property string $country
 * @property string $studid
 * @property int $progid
 * @property string $dbname
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%test}}';
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
            [['progid'], 'integer'],
            [['fullname', 'dbname'], 'string', 'max' => 35],
            [['emailadd', 'town', 'country'], 'string', 'max' => 50],
            [['studid'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fullname' => Yii::t('app', 'Fullname'),
            'emailadd' => Yii::t('app', 'Emailadd'),
            'town' => Yii::t('app', 'Town'),
            'country' => Yii::t('app', 'Country'),
            'studid' => Yii::t('app', 'Studid'),
            'progid' => Yii::t('app', 'Progid'),
            'dbname' => Yii::t('app', 'Dbname'),
        ];
    }
}
