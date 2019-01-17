<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Competition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="competition-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<?php if (Yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4><i class="icon fa fa-check"></i>Message</h4>
         <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>
    <?= $form->field($model, 'product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'competitor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'observations')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'store')->hiddenInput(['value'=>$rp->sid])->label(false) ?>    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
		<a href="<?=Url::to(['route-planner/finish','id'=>$rp->id])?>" class="btn btn-primary">Finish</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
