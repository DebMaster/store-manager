<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
/**
 * This is the model class for table "competition".
 *
 * @property int $id
 * @property string $product
 * @property string $picture
 * @property string $competitor_name
 * @property double $price
 * @property string $observations
 * @property int $store
 * @property string $created
 */
class Competition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 public $file;
    public static function tableName()
    {
        return 'competition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product', 'competitor_name', 'price', 'observations', 'store'], 'required'],
            [['price'], 'number'],
			[['file'], 'file'],
            [['observations'], 'string'],
            [['store'], 'integer'],
            [['created'], 'safe'],
            [['product', 'competitor_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Product',
            'picture' => 'Picture',
            'competitor_name' => 'Competitor Name',
            'price' => 'Price',
            'observations' => 'Observations',
            'store' => 'Store',
            'created' => 'Created',
        ];
    }
}
