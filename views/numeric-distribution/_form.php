<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Product;
use app\models\Store;
use yii\helpers\ArrayHelper;
$products=Product::find()->all();
$stores=Store::find()->all();
$listData=ArrayHelper::map($products,'id',function($data){return $data->name;});
$storeData=ArrayHelper::map($stores,'id',function($data){return $data->name;});
/* @var $this yii\web\View */
/* @var $model app\models\NumericDistribution */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="numeric-distribution-form">

    <?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'store')->dropDownList($storeData,['prompt'=>'Select Store']);?>
    <p>Select if product is in store</p>
	<?php
	foreach($products as $p){
		echo $p->name." <input type='checkbox' name='prd[]'><br>";
	}
	?>
	  

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
