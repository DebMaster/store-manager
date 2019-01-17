<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Store;
use yii\helpers\ArrayHelper;
$stores=Store::find()->all();
$listData=ArrayHelper::map($stores,'id',function($data){return $data->name.' - '.$data->address;});

/* @var $this yii\web\View */
/* @var $model app\models\RoutePlanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="route-planner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eid')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>
    <?= $form->field($model, 'sid')->dropDownList($listData,['prompt'=>'Select Store']);?>
    <?= $form->field($model, 'date_scheduled')->textInput(['id'=>'date']) ?>

   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
