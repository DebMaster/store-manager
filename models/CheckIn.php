<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "check_in".
 *
 * @property int $id
 * @property int $eid
 * @property int $sid
 * @property string $notes
 * @property string $available
 * @property string $created
 */
class CheckIn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'check_in';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eid', 'sid', 'notes', 'available'], 'required'],
            [['eid', 'sid'], 'integer'],
            [['notes', 'available'], 'string'],
            [['created'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eid' => 'Eid',
            'sid' => 'Sid',
            'notes' => 'Notes',
            'available' => 'Available',
            'created' => 'Created',
        ];
    }
}
