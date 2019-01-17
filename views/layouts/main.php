<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
if(Yii::$app->user->isGuest){
	Yii::$app->response->redirect(['site/login']);
}else{
?>
<!DOCTYPE HTML>
<html>
<head>
 <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/chart-pie.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--//skycons-icons-->
</head> 
<body>
<?php $this->beginBody() ?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        
									
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											     <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			
																		</div>
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
													
										
										</li>
									
										
										
						
					   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
							<!--//outer-wp-->
								<div class="outter-wp">
								<!--/sub-heard-part-->
											
										<!--/sub-heard-part-->		
									<!--/inbox-->
							   <div class="candile">
								<?=$content?>
								<div class="clearfix"> </div>	<div class="clearfix"> </div>	
								</div>
											
										</div>

								<!--//outer-wp-->
								<!--footer section start-->
										<footer>
										   <p>&copy <?=date("Y")?> Nestle . All Rights Reserved</p>
										</footer>
								<!--footer section end-->
							</div>
						</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Nestle</h1></span> 
						<!--<img id="logo" src="" alt="Logo"/>--> 
					</a> 
					</header>
				<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  
									  <a href="index.html"><span class=" name-caret"><?=Yii::$app->user->identity->name; ?></span></a>									
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>										
										<li><a class="tooltips" href="<?=Url::to(['site/logout'])?>"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
						<div class="menu">
									<ul id="menu" >
										<li><a href="<?=Url::to(['site/index'])?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="lnr lnr-map"></i> <span> Route Map</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="<?=Url::to(['route-planner/index'])?>">Scheduled Visits</a></li>																						
										  </ul>
										</li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Stores</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="<?=Url::to(['store/create'])?>">Add</a></li>
												<li id="menu-academico-boletim" ><a href="<?=Url::to(['store/index'])?>">View All</a></li>
											  </ul>
										 </li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-shopping-cart"></i> <span>Products</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="<?=Url::to(['product/create'])?>">Add</a></li>
												<li id="menu-academico-boletim" ><a href="<?=Url::to(['product/index'])?>">View All</a></li>
											  </ul>
										 </li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Store Check In</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="<?=Url::to(['numeric-distribution/create'])?>">Start</a></li>
												<li id="menu-academico-boletim" ><a href="<?=Url::to(['numeric-distribution/index'])?>">View History</a></li>
											  </ul>
										 </li>
									<li><a href="<?=Url::to(['route-planner/create'])?>"><i class="lnr lnr-pencil"></i> <span>Scheduler</span></a></li>
									
									 <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Messages</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="<?=Url::to(['messages/index'])?>"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="<?=Url::to(['messages/create'])?>"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>									
									  </ul>
									</li>
									<li><a href="<?=Url::to(['route-planner/kpi'])?>"><i class="lnr lnr-chart-bars"></i> <span>KPI</span></a></li>
									
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Client Visit</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="">Add New</a></li>
											<li id="menu-academico-boletim" ><a href="">View</a></li>

										  </ul>
									 </li>
									<li id="menu-academico" ><a href="#"><i class="lnr lnr-user"></i> <span>Users</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="<?=Url::to(['users/create'])?>">Add New</a></li>
											<li id="menu-academico-boletim" ><a href="<?=Url::to(['users/index'])?>">View</a></li>

										  </ul>
									 </li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
     <script>
  $( function() {
    $( "#date" ).datepicker({
  dateFormat: "yy-mm-dd"
});
  } );
  getLocation();
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
function showPosition(position) {
    //alert("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude); 
}
  </script>
</body>
</html>
<?php
}
?>