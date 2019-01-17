<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "outlet_check".
 *
 * @property int $id
 * @property int $route_plan
 * @property string $observations
 * @property string $claims
 * @property string $created
 */
class OutletCheck extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outlet_check';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['route_plan', 'observations', 'claims'], 'required'],
            [['route_plan'], 'integer'],
            [['observations', 'claims'], 'string'],
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
            'route_plan' => 'Route Plan',
            'observations' => 'Observations',
            'claims' => 'Claims',
            'created' => 'Created',
        ];
    }
}
