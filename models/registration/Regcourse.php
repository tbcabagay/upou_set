<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%regcourse}}".
 *
 * @property int $recid
 * @property int $regid
 * @property int $crsid
 * @property string $rem
 * @property string $section
 * @property string $crsnum
 *
 * @property Registration $reg
 */
class Regcourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%regcourse}}';
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
            [['regid', 'crsid'], 'integer'],
            [['section'], 'number'],
            [['crsnum'], 'required'],
            [['rem'], 'string', 'max' => 1],
            [['crsnum'], 'string', 'max' => 15],
            [['regid', 'rem', 'crsid'], 'unique', 'targetAttribute' => ['regid', 'rem', 'crsid']],
            [['regid'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['regid' => 'regid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'regid' => Yii::t('app', 'Regid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'rem' => Yii::t('app', 'Rem'),
            'section' => Yii::t('app', 'Section'),
            'crsnum' => Yii::t('app', 'Crsnum'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['regid' => 'regid']);
    }
}
