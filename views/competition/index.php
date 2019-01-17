<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Competitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competition-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Competition', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product',
            //'picture',
			[
		'format' => 'html',	 
       'label' => 'Picture',
       'value' => function ($model) {
		   if($model->picture == ""){
			   return "<img src='images/cart.png' height='80' width='80'/>";   
		   }else{
			return "<img src='".$model->picture."' height='80' width='80'/>";   
		   }		   
       }
     ],
            'competitor_name',
            'price',
            //'observations:ntext',
            //'store',
            //'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
