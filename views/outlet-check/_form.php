<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OutletCheck */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outlet-check-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route_plan')->hiddenInput(['value'=>$rp->id])->label(false) ?>

    <?= $form->field($model, 'observations')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'claims')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select Option']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
