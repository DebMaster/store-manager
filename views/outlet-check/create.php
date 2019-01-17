<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OutletCheck */

$this->title = 'Outlet Check/Overview';
$this->params['breadcrumbs'][] = ['label' => 'Outlet Checks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outlet-check-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'rp'=>$rp,
    ]) ?>

</div>
