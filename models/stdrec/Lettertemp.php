<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%lettertemp}}".
 *
 * @property int $tempid
 * @property string $tempname
 * @property string $template
 * @property string $tempquery
 */
class Lettertemp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lettertemp}}';
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
            [['template', 'tempquery'], 'required'],
            [['template', 'tempquery'], 'string'],
            [['tempname'], 'string', 'max' => 100],
            [['tempname'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tempid' => Yii::t('app', 'Tempid'),
            'tempname' => Yii::t('app', 'Tempname'),
            'template' => Yii::t('app', 'Template'),
            'tempquery' => Yii::t('app', 'Tempquery'),
        ];
    }
}
