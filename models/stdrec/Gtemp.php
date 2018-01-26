<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%gtemp}}".
 *
 * @property string $grsem
 * @property string $gryear
 * @property string $grstudid
 * @property int $grcrsid
 * @property string $coursecode
 * @property string $grfgrade
 * @property string $grremarks
 * @property string $grcgrade
 * @property string $institution
 * @property string $term
 * @property string $subject
 * @property string $catalog_nbr
 * @property string $letter_grade
 */
class Gtemp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gtemp}}';
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
            [['grsem', 'grfgrade', 'grcgrade'], 'string'],
            [['grcrsid'], 'integer'],
            [['institution', 'term', 'subject', 'catalog_nbr', 'letter_grade'], 'required'],
            [['gryear', 'term', 'letter_grade'], 'string', 'max' => 4],
            [['grstudid'], 'string', 'max' => 15],
            [['coursecode', 'subject'], 'string', 'max' => 20],
            [['grremarks'], 'string', 'max' => 250],
            [['institution'], 'string', 'max' => 5],
            [['catalog_nbr'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grsem' => Yii::t('app', 'Grsem'),
            'gryear' => Yii::t('app', 'Gryear'),
            'grstudid' => Yii::t('app', 'Grstudid'),
            'grcrsid' => Yii::t('app', 'Grcrsid'),
            'coursecode' => Yii::t('app', 'Coursecode'),
            'grfgrade' => Yii::t('app', 'Grfgrade'),
            'grremarks' => Yii::t('app', 'Grremarks'),
            'grcgrade' => Yii::t('app', 'Grcgrade'),
            'institution' => Yii::t('app', 'Institution'),
            'term' => Yii::t('app', 'Term'),
            'subject' => Yii::t('app', 'Subject'),
            'catalog_nbr' => Yii::t('app', 'Catalog Nbr'),
            'letter_grade' => Yii::t('app', 'Letter Grade'),
        ];
    }
}
