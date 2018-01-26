<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%grades}}".
 *
 * @property string $grStudId
 * @property string $grFgrade
 * @property int $grCrsId
 * @property double $grUnits
 * @property string $grSem
 * @property string $grYear
 * @property int $grProgId
 * @property int $grProgIDExit
 * @property int $grMajId
 * @property int $grLcId
 * @property string $grRemarks
 * @property string $grCgrade
 * @property string $grCgradeb
 * @property string $grCgrade_date
 * @property string $grCgradeb_date
 * @property string $grUpdate
 * @property string $grUpdateby
 * @property string $grReceived
 * @property string $osgdate
 * @property string $osgcdate
 * @property string $crossedto
 * @property string $chgradefrom
 * @property string $chgradeto
 * @property string $chgradedate
 * @property string $chgoldremarks
 * @property int $grRecid
 *
 * @property Students $grStud
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%grades}}';
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
            [['grCrsId', 'grProgId', 'grProgIDExit', 'grMajId', 'grLcId'], 'integer'],
            [['grUnits'], 'number'],
            [['grSem'], 'string'],
            [['grCgrade_date', 'grCgradeb_date', 'grUpdate', 'grReceived', 'osgdate', 'osgcdate', 'chgradedate'], 'safe'],
            [['grStudId', 'grUpdateby'], 'string', 'max' => 15],
            [['grFgrade', 'grCgrade', 'grCgradeb'], 'string', 'max' => 10],
            [['grYear'], 'string', 'max' => 4],
            [['grRemarks', 'chgoldremarks'], 'string', 'max' => 250],
            [['crossedto'], 'string', 'max' => 100],
            [['chgradefrom', 'chgradeto'], 'string', 'max' => 7],
            [['grStudId', 'grCrsId', 'grSem', 'grYear'], 'unique', 'targetAttribute' => ['grStudId', 'grCrsId', 'grSem', 'grYear']],
            [['grStudId'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['grStudId' => 'studid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grStudId' => Yii::t('app', 'Gr Stud ID'),
            'grFgrade' => Yii::t('app', 'Gr Fgrade'),
            'grCrsId' => Yii::t('app', 'Gr Crs ID'),
            'grUnits' => Yii::t('app', 'Gr Units'),
            'grSem' => Yii::t('app', 'Gr Sem'),
            'grYear' => Yii::t('app', 'Gr Year'),
            'grProgId' => Yii::t('app', 'Gr Prog ID'),
            'grProgIDExit' => Yii::t('app', 'Gr Prog Idexit'),
            'grMajId' => Yii::t('app', 'Gr Maj ID'),
            'grLcId' => Yii::t('app', 'Gr Lc ID'),
            'grRemarks' => Yii::t('app', 'Gr Remarks'),
            'grCgrade' => Yii::t('app', 'Gr Cgrade'),
            'grCgradeb' => Yii::t('app', 'Gr Cgradeb'),
            'grCgrade_date' => Yii::t('app', 'Gr Cgrade Date'),
            'grCgradeb_date' => Yii::t('app', 'Gr Cgradeb Date'),
            'grUpdate' => Yii::t('app', 'Gr Update'),
            'grUpdateby' => Yii::t('app', 'Gr Updateby'),
            'grReceived' => Yii::t('app', 'Gr Received'),
            'osgdate' => Yii::t('app', 'Osgdate'),
            'osgcdate' => Yii::t('app', 'Osgcdate'),
            'crossedto' => Yii::t('app', 'Crossedto'),
            'chgradefrom' => Yii::t('app', 'Chgradefrom'),
            'chgradeto' => Yii::t('app', 'Chgradeto'),
            'chgradedate' => Yii::t('app', 'Chgradedate'),
            'chgoldremarks' => Yii::t('app', 'Chgoldremarks'),
            'grRecid' => Yii::t('app', 'Gr Recid'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrStud()
    {
        return $this->hasOne(Students::className(), ['studid' => 'grStudId']);
    }
}
