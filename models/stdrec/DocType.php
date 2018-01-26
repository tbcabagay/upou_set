<?php

namespace app\models\stdrec;

use Yii;

/**
 * This is the model class for table "{{%doc_type}}".
 *
 * @property int $doctypeid
 * @property string $docname
 * @property string $fee
 * @property string $doccode
 * @property int $publish
 * @property string $maxrequest
 * @property int $nocharge
 */
class DocType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%doc_type}}';
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
            [['fee', 'maxrequest'], 'number'],
            [['publish', 'nocharge'], 'integer'],
            [['docname'], 'string', 'max' => 150],
            [['doccode'], 'string', 'max' => 10],
            [['docname'], 'unique'],
            [['doccode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'doctypeid' => Yii::t('app', 'Doctypeid'),
            'docname' => Yii::t('app', 'Docname'),
            'fee' => Yii::t('app', 'Fee'),
            'doccode' => Yii::t('app', 'Doccode'),
            'publish' => Yii::t('app', 'Publish'),
            'maxrequest' => Yii::t('app', 'Maxrequest'),
            'nocharge' => Yii::t('app', 'Nocharge'),
        ];
    }
}
