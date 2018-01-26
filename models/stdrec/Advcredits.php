<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%advcredits}}".
 *
 * @property int $advid
 * @property string $advstudid
 * @property string $advsem
 * @property string $advyear
 * @property string $advsubject
 * @property string $advsubtitle
 * @property string $advgrade
 * @property string $advunits
 * @property string $advschcode
 * @property int $addlcrs
 * @property string $adexamdate
 * @property string $adexamresult
 * @property int $nonacad
 * @property int $toc_prog1
 * @property int $toc_prog2
 * @property int $toc_prog3
 * @property int $toc_prog4
 * @property int $toc_prog5
 * @property string $remarks
 */
class Advcredits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%advcredits}}';
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
            [['advyear', 'advunits'], 'number'],
            [['addlcrs', 'nonacad', 'toc_prog1', 'toc_prog2', 'toc_prog3', 'toc_prog4', 'toc_prog5'], 'integer'],
            [['adexamdate'], 'safe'],
            [['adexamresult', 'remarks'], 'string'],
            [['remarks'], 'required'],
            [['advstudid'], 'string', 'max' => 15],
            [['advsem'], 'string', 'max' => 2],
            [['advsubject'], 'string', 'max' => 50],
            [['advsubtitle'], 'string', 'max' => 200],
            [['advgrade'], 'string', 'max' => 5],
            [['advschcode'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'advid' => Yii::t('app', 'Advid'),
            'advstudid' => Yii::t('app', 'Advstudid'),
            'advsem' => Yii::t('app', 'Advsem'),
            'advyear' => Yii::t('app', 'Advyear'),
            'advsubject' => Yii::t('app', 'Advsubject'),
            'advsubtitle' => Yii::t('app', 'Advsubtitle'),
            'advgrade' => Yii::t('app', 'Advgrade'),
            'advunits' => Yii::t('app', 'Advunits'),
            'advschcode' => Yii::t('app', 'Advschcode'),
            'addlcrs' => Yii::t('app', 'Addlcrs'),
            'adexamdate' => Yii::t('app', 'Adexamdate'),
            'adexamresult' => Yii::t('app', 'Adexamresult'),
            'nonacad' => Yii::t('app', 'Nonacad'),
            'toc_prog1' => Yii::t('app', 'Toc Prog1'),
            'toc_prog2' => Yii::t('app', 'Toc Prog2'),
            'toc_prog3' => Yii::t('app', 'Toc Prog3'),
            'toc_prog4' => Yii::t('app', 'Toc Prog4'),
            'toc_prog5' => Yii::t('app', 'Toc Prog5'),
            'remarks' => Yii::t('app', 'Remarks'),
        ];
    }
}
