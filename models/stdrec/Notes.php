<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%notes}}".
 *
 * @property string $studid
 * @property string $stdnote
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%notes}}';
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
            [['studid', 'stdnote'], 'required'],
            [['stdnote'], 'string'],
            [['studid'], 'string', 'max' => 15],
            [['studid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'studid' => Yii::t('app', 'Studid'),
            'stdnote' => Yii::t('app', 'Stdnote'),
        ];
    }
}
