<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "store".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $latitude
 * @property string $longitude
 * @property string $created
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'email', 'latitude', 'longitude'], 'required'],
            [['address', 'latitude', 'longitude'], 'string'],
            [['created'], 'safe'],
            [['name', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'created' => 'Created',
        ];
    }
}
