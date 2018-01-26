<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%drp_course}}".
 *
 * @property int $drploaid
 * @property int $crsid
 * @property string $ssem
 * @property string $syear
 * @property int $recid
 *
 * @property Drploa $drploa
 */
class DrpCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%drp_course}}';
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
            [['drploaid', 'crsid'], 'integer'],
            [['syear'], 'number'],
            [['ssem'], 'string', 'max' => 2],
            [['drploaid'], 'exist', 'skipOnError' => true, 'targetClass' => Drploa::className(), 'targetAttribute' => ['drploaid' => 'drploaid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'drploaid' => Yii::t('app', 'Drploaid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrploa()
    {
        return $this->hasOne(Drploa::className(), ['drploaid' => 'drploaid']);
    }
}
