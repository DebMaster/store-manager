<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property int $_from
 * @property int $_to
 * @property string $message
 * @property string $created
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_from', '_to', 'message'], 'required'],
            [['_from', '_to'], 'integer'],
            [['message'], 'string'],
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
            '_from' => 'From',
            '_to' => 'To',
            'message' => 'Message',
            'created' => 'Created',
        ];
    }
}
