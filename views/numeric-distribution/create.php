<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NumericDistribution */

$this->title = 'Create Numeric Distribution';
$this->params['breadcrumbs'][] = ['label' => 'Numeric Distributions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numeric-distribution-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
