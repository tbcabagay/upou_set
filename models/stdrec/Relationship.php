<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%relationship}}".
 *
 * @property int $recid
 * @property string $studid
 * @property string $father
 * @property string $mother
 * @property string $spouse
 * @property string $father_add
 * @property string $mother_add
 * @property string $spouse_add
 * @property string $father_telno
 * @property string $mother_telno
 * @property string $spouse_telno
 *
 * @property Students $stud
 */
class Relationship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%relationship}}';
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
            [['studid'], 'string', 'max' => 15],
            [['father', 'mother', 'spouse', 'father_telno', 'mother_telno', 'spouse_telno'], 'string', 'max' => 35],
            [['father_add', 'mother_add', 'spouse_add'], 'string', 'max' => 200],
            [['studid', 'father', 'mother', 'spouse'], 'unique', 'targetAttribute' => ['studid', 'father', 'mother', 'spouse']],
            [['studid'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['studid' => 'studid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'studid' => Yii::t('app', 'Studid'),
            'father' => Yii::t('app', 'Father'),
            'mother' => Yii::t('app', 'Mother'),
            'spouse' => Yii::t('app', 'Spouse'),
            'father_add' => Yii::t('app', 'Father Add'),
            'mother_add' => Yii::t('app', 'Mother Add'),
            'spouse_add' => Yii::t('app', 'Spouse Add'),
            'father_telno' => Yii::t('app', 'Father Telno'),
            'mother_telno' => Yii::t('app', 'Mother Telno'),
            'spouse_telno' => Yii::t('app', 'Spouse Telno'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStud()
    {
        return $this->hasOne(Students::className(), ['studid' => 'studid']);
    }
}
