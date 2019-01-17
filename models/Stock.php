<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $id
 * @property int $product_id
 * @property int $store_id
 * @property int $quantity
 * @property double $buying_price
 * @property double $selling_price
 * @property string $created
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'store_id', 'quantity', 'buying_price', 'selling_price'], 'required'],
            [['product_id', 'store_id', 'quantity'], 'integer'],
            [['buying_price', 'selling_price'], 'number'],
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
            'product_id' => 'Product',
            'store_id' => 'Store',
            'quantity' => 'Quantity',
            'buying_price' => 'Buying Price',
            'selling_price' => 'Selling Price',
            'created' => 'Created',
        ];
    }
}
