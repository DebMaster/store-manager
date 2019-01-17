<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OutletCheck */

$this->title = 'Update Outlet Check: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Outlet Checks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="outlet-check-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
