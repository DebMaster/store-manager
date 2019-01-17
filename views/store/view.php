<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Product;
/* @var $this yii\web\View */
/* @var $model app\models\Store */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Stores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		 <?= Html::a('Competititor Products', ['competition/index', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
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
            'address:ntext',
            'phone',
            'email:email',
            'latitude',
            'longitude',
            'created',
        ],
    ]) ?>

</div>
<div class="numeric-distribution-index">

    <h1>Numeric Distribution</h1>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'store',
            //'score',
			[
		'format' => 'html',	 
       'label' => 'Penetration',
       'value' => function ($model) {
		   $products=Product::find()->count();
		   $score=1;
		   if($model->score > 0){
			   $score=$model->score;
		   }
		   return (($score/$products)*100)."%"; 		   
       }
     ],
           // 'product',
           // 'created',

          
        ],
    ]); ?>
</div>
