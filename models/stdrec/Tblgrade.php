<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%tblgrade}}".
 *
 * @property string $grade
 * @property string $gradetype
 */
class Tblgrade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tblgrade}}';
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
            [['grade', 'gradetype'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grade' => Yii::t('app', 'Grade'),
            'gradetype' => Yii::t('app', 'Gradetype'),
        ];
    }
}
