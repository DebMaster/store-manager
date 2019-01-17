<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Store;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Add Stock', ['stock/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            'created',
        ],
    ]) ?>
	<h3>Stocks</h3>
	 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'product_id',
			[
		'format' => 'html',	 
       'label' => 'Store',
       'value' => function ($model) {
		   $store=Store::find()->where(['id'=>$model->store_id])->one();		  
           if($store){
			   return $store->name." - ".$store->address;
		   }else{
		return "Store name missing";
          }		   
       }
     ],
            //'store_id',
            'quantity',
            'buying_price',
            'selling_price',
            //'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
