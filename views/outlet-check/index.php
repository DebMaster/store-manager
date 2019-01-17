<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Outlet Checks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outlet-check-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Outlet Check', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'route_plan',
            'observations:ntext',
            'claims',
            'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
