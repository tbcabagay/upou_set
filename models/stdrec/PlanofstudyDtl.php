<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%planofstudy_dtl}}".
 *
 * @property int $psdtlid
 * @property int $psid
 * @property string $groupname
 */
class PlanofstudyDtl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%planofstudy_dtl}}';
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
            [['psid'], 'integer'],
            [['groupname'], 'string', 'max' => 150],
            [['psid', 'groupname'], 'unique', 'targetAttribute' => ['psid', 'groupname']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'psdtlid' => Yii::t('app', 'Psdtlid'),
            'psid' => Yii::t('app', 'Psid'),
            'groupname' => Yii::t('app', 'Groupname'),
        ];
    }
}
