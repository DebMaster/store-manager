<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Numeric Distributions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numeric-distribution-index">

    <h1><?= Html::encode($this->title) ?></h1>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'store',
            'score',
            'product',
            'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
