<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CheckIn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="check-in-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eid')->textInput() ?>

    <?= $form->field($model, 'sid')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'available')->dropDownList([ 'unavailable' => 'Unavailable', 'available' => 'Available', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
