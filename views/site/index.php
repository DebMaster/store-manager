<?php

/* @var $this yii\web\View */
use app\models\Users;
use app\models\Store;
use app\models\Product;
use app\models\RoutePlanner;
$this->title = 'Nestle';
?>
<div class="site-index">

	<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Today</h5>
																<h4> Users</h4>
															</div>
															<div class="stats-right">
																<label><?=Users::find()->count()?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Stores</h4>
															</div>
															<div class="stats-right">
																<label><?=Store::find()->count()?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Products</h4>
															</div>
															<div class="stats-right">
																<label><?=Product::find()->count()?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
																<h5>Visits</h5>
																<h4>Pending</h4>
															</div>
															<div class="stats-right">
																<label><?=RoutePlanner::find()->where(['status'=>'pending'])->count()?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Stores</h3>
																</div>
																<table class="table">
																<thead>
																<tr>
																<td>Icon</td>
																<td>Name</td>
																</tr>
																</thead>
																<tbody>
																<?php
																$stores=Store::find()->all();
																foreach($stores as $s){
																	echo "<tr><td><img height='80' width='80' src='images/cart.png' /></td><td>".$s->name."</td></tr>";
																}
																?>
																</tbody>
																</table>
                                                  </div>																
																	
																	
																	
    
</div>
