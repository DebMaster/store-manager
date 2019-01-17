<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RoutePlanner */

$this->title = 'Add Scheduled Shop Visit';
$this->params['breadcrumbs'][] = ['label' => 'Route Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-planner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
