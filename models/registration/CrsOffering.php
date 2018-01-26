<?php

namespace app\models\registration;

use Yii;

/**
 * This is the model class for table "{{%crs_offering}}".
 *
 * @property int $crsoffid
 * @property int $crsid
 * @property int $facid
 * @property int $facid2
 * @property int $facid3
 * @property int $facid4
 * @property int $facid5
 * @property int $facid6
 * @property int $facid7
 * @property int $facid8
 * @property int $facid9
 * @property int $facid10
 * @property string $ssem
 * @property string $syear
 */
class CrsOffering extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%crs_offering}}';
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
            [['crsid', 'facid', 'facid2', 'facid3', 'facid4', 'facid5', 'facid6', 'facid7', 'facid8', 'facid9', 'facid10'], 'integer'],
            [['syear'], 'number'],
            [['ssem'], 'string', 'max' => 2],
            [['crsid', 'ssem', 'syear'], 'unique', 'targetAttribute' => ['crsid', 'ssem', 'syear']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'crsoffid' => Yii::t('app', 'Crsoffid'),
            'crsid' => Yii::t('app', 'Crsid'),
            'facid' => Yii::t('app', 'Facid'),
            'facid2' => Yii::t('app', 'Facid2'),
            'facid3' => Yii::t('app', 'Facid3'),
            'facid4' => Yii::t('app', 'Facid4'),
            'facid5' => Yii::t('app', 'Facid5'),
            'facid6' => Yii::t('app', 'Facid6'),
            'facid7' => Yii::t('app', 'Facid7'),
            'facid8' => Yii::t('app', 'Facid8'),
            'facid9' => Yii::t('app', 'Facid9'),
            'facid10' => Yii::t('app', 'Facid10'),
            'ssem' => Yii::t('app', 'Ssem'),
            'syear' => Yii::t('app', 'Syear'),
        ];
    }
}
