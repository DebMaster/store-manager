<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "route_planner".
 *
 * @property int $id
 * @property int $eid
 * @property int $sid
 * @property string $date_scheduled
 * @property string $status
 * @property string $created
 */
class RoutePlanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'route_planner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eid', 'sid', 'date_scheduled'], 'required'],
            [['eid', 'sid'], 'integer'],
            [['date_scheduled', 'created'], 'safe'],
            [['status'], 'string'],
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
            'sid' => 'Store',
            'date_scheduled' => 'Date Scheduled',
            'status' => 'Status',
            'created' => 'Created',
        ];
    }
	
public function calculateDistance($lat1, $lon1, $lat2, $lon2, $unit){		

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }

echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";	
}
}
