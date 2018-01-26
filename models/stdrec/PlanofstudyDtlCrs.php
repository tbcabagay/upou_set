<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%planofstudy_dtl_crs}}".
 *
 * @property int $recid
 * @property int $psdtlid
 * @property int $crsid
 */
class PlanofstudyDtlCrs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%planofstudy_dtl_crs}}';
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
            [['psdtlid', 'crsid'], 'integer'],
            [['psdtlid', 'crsid'], 'unique', 'targetAttribute' => ['psdtlid', 'crsid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'psdtlid' => Yii::t('app', 'Psdtlid'),
            'crsid' => Yii::t('app', 'Crsid'),
        ];
    }
}
