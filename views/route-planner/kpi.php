<?php
use app\models\Users;
use app\models\Store;
use app\models\Product;
use app\models\NumericDistribution;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'KPI';
$this->params['breadcrumbs'][] = $this->title;
$products=Product::find()->count();
$names=array();
$values=array();
$nd=NumericDistribution::find()->all();
foreach($nd as $n){
	$store=Store::find()->where(['id'=>$n->store])->one();
	$v=round(($n->score/$products)*100,2);
	array_push($names,$store->name);
	array_push($values,$v);
}
?>
<div class="row">

   
   
    <div class="col-md-6">
	 <h1><?= Html::encode($this->title) ?></h1>
<input type="hidden" id="pending" value="<?=$pending?>">
   <input type="hidden" id="cancelled" value="<?=$cancelled?>">
   <input type="hidden" id="visited" value="<?=$visited?>">
	 <h3 class="inner-tittle">Shop Visits </h3>																
																			<div class="grid-1">
																				<div class="text-1">
																						<h4>Key</h4>
																						<div class="grid-graph">
																							<div class="grid-graph1">
																							<div id="os-Win-lbl">Pending <span><?=$pending?></span></div>
																							<div id="os-Mac-lbl">Visited<span><?=$visited?></span></div>
																							<div id="os-Other-lbl">Cancelled<span><?=$cancelled?></span></div>
																							</div>
																						 </div>
																						 </div>																	
	
																					<div class="text-2">
																						<canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
																						<script>
																							var pieData = [
																								{
																									value: <?=$pending?>,
																									color:"#ea4c89"
																								},
																								{
																									value : <?=$visited?>,
																									color : "#052963"
																								},
																								{
																									value : <?=$cancelled?>,
																									color : "#00C6D7"
																								}
																							
																							];
																							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
																						</script>
																					</div>
																					<div class="clearfix"> </div>
																					
																					
																					
																					
																				 </div>
																				 </div>
																				
																				 <div class="col-md-6">
																<div class="col-md-6 graph-2">
																 <h3 class="inner-tittle">Product Penetration</h3>
																			
																</div>
																			<div class="grid-1">
																							<canvas id="line2" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
																							<script>
																							var labels=<?=json_encode($names)?>;
																							var values=<?=json_encode($values)?>;
																					
																									var lineChartData = {
																										labels : labels,
																										datasets : [
																											{
																												fillColor : "#f4f4f4",
																												strokeColor : "#052963",
																												pointColor : "#00C6D7",
																												pointStrokeColor : "#00C6D7",
																												data : values
																											}
																										]
																										
																									};
																									new Chart(document.getElementById("line2").getContext("2d")).Bar(lineChartData);
																							</script>
																						</div>
																</div>
																				 </div>
																				 <div class="row">
																				 <div class="col-md-12">
																				 <table class="table">
																				 <tr>
																				 <td>Key</td>
																				 <td>Value</td>
																				 </tr>
																				 <tr>
																				 <td>Pending</td>
																				 <td><?=$pending?></td>
																				 </tr>
																				  <tr>
																				 <td>Cancelled</td>
																				 <td><?=$cancelled?></td>
																				 </tr>
																				  <tr>
																				 <td>Visited</td>
																				 <td><?=$visited?></td>
																				 </tr>
																				 </table>
																				 </div>
   
</div>
