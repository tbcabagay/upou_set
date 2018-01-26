<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%applic_type}}".
 *
 * @property int $recid
 * @property string $application
 */
class ApplicType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%applic_type}}';
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
            [['application'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => Yii::t('app', 'Recid'),
            'application' => Yii::t('app', 'Application'),
        ];
    }
}
