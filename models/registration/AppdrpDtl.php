<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%appdrp_dtl}}".
 *
 * @property int $appdrpid
 * @property int $crsid
 * @property string $appstatus
 * @property int $recid
 *
 * @property Appdrp $appdrp
 */
class AppdrpDtl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appdrp_dtl}}';
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
            [['appdrpid', 'crsid'], 'integer'],
            [['appstatus'], 'string', 'max' => 15],
            [['appdrpid'], 'exist', 'skipOnError' => true, 'targetClass' => Appdrp::className(), 'targetAttribute' => ['appdrpid' => 'appdrpid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appdrpid' => Yii::t('app', 'Appdrpid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'appstatus' => Yii::t('app', 'Appstatus'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppdrp()
    {
        return $this->hasOne(Appdrp::className(), ['appdrpid' => 'appdrpid']);
    }
}
