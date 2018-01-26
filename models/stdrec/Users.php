<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $uid
 * @property string $uname
 * @property string $upass
 * @property string $ufullname
 * @property string $utype
 * @property int $uadmiss
 * @property int $ureg
 * @property int $urec
 * @property int $uuser
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
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
            [['uadmiss', 'ureg', 'urec', 'uuser'], 'integer'],
            [['uname', 'utype'], 'string', 'max' => 15],
            [['upass'], 'string', 'max' => 32],
            [['ufullname'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => Yii::t('app', 'Uid'),
            'uname' => Yii::t('app', 'Uname'),
            'upass' => Yii::t('app', 'Upass'),
            'ufullname' => Yii::t('app', 'Ufullname'),
            'utype' => Yii::t('app', 'Utype'),
            'uadmiss' => Yii::t('app', 'Uadmiss'),
            'ureg' => Yii::t('app', 'Ureg'),
            'urec' => Yii::t('app', 'Urec'),
            'uuser' => Yii::t('app', 'Uuser'),
        ];
    }
}
