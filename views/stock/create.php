<?php

use yii\helpers\Html;
use app\models\Product;

/* @var $this yii\web\View */
/* @var $model app\models\Stock */
$product=Product::find()->where(['id'=>$product_id])->one();
$this->title = 'Add Stock for '.$product->name;
$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'product_id'=>$product_id,
    ]) ?>

</div>
