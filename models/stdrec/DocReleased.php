<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%doc_released}}".
 *
 * @property int $docid
 * @property int $doctypeid
 * @property string $docname
 * @property int $pages
 * @property string $datereleased
 * @property string $studid
 * @property string $remarks
 * @property string $address
 */
class DocReleased extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%doc_released}}';
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
            [['doctypeid', 'pages'], 'integer'],
            [['datereleased'], 'safe'],
            [['address'], 'required'],
            [['address'], 'string'],
            [['docname'], 'string', 'max' => 150],
            [['studid'], 'string', 'max' => 15],
            [['remarks'], 'string', 'max' => 200],
            [['doctypeid', 'datereleased', 'studid'], 'unique', 'targetAttribute' => ['doctypeid', 'datereleased', 'studid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'docid' => Yii::t('app', 'Docid'),
            'doctypeid' => Yii::t('app', 'Doctypeid'),
            'docname' => Yii::t('app', 'Docname'),
            'pages' => Yii::t('app', 'Pages'),
            'datereleased' => Yii::t('app', 'Datereleased'),
            'studid' => Yii::t('app', 'Studid'),
            'remarks' => Yii::t('app', 'Remarks'),
            'address' => Yii::t('app', 'Address'),
        ];
    }
}
