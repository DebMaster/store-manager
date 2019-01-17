<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numeric_distribution".
 *
 * @property int $id
 * @property int $store
 * @property double $score
 * @property int $product
 * @property string $created
 */
class NumericDistribution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'numeric_distribution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store', 'score'], 'required'],
            [['store', 'product'], 'integer'],
            [['score'], 'number'],
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
            'store' => 'Store',
            'score' => 'Score',
            'product' => 'Product',
            'created' => 'Created',
        ];
    }
}
