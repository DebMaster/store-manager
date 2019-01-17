<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Store;
use yii\helpers\ArrayHelper;
$stores=Store::find()->all();
$listData=ArrayHelper::map($stores,'id',function($data){return $data->name.' - '.$data->address;});

/* @var $this yii\web\View */
/* @var $model app\models\Stock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->hiddenInput(['value'=>$product_id])->label(false) ?>

	 <?= $form->field($model, 'store_id')->dropDownList($listData,['prompt'=>'Select Store']);?>
 

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'buying_price')->textInput() ?>

    <?= $form->field($model, 'selling_price')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
