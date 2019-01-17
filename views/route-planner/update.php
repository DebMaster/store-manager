<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoutePlanner */

$this->title = 'Update Route Planner: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Route Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="route-planner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
