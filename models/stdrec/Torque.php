<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%torque}}".
 *
 * @property string $torque
 * @property int $recid
 */
class Torque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%torque}}';
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
            [['torque'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'torque' => Yii::t('app', 'Torque'),
            'recid' => Yii::t('app', 'Recid'),
        ];
    }
}
