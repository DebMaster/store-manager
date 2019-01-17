<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users;
use yii\helpers\ArrayHelper;
$users=Users::find()->where('id != :id', ['id'=>Yii::$app->user->identity->id])->all();
$listData=ArrayHelper::map($users,'id',function($data){return $data->name;});

/* @var $this yii\web\View */
/* @var $model app\models\Messages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '_from')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>
   <?= $form->field($model, '_to')->dropDownList($listData,['prompt'=>'Select Receipient']);?>
    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
