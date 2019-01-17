<?php
use app\models\Store;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RoutePlanner */
$store=Store::find()->where(['id'=>$model->sid])->one();
$this->title = "Welcome to ".$store->name;
$this->params['breadcrumbs'][] = ['label' => 'Route Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-planner-view">

    <center>
	<h1><?= Html::encode($this->title) ?></h1>
	<img src="images/briefcase.png" height="320" width="320">
	<h3>Start Store Call</h3>
	</center>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            //'eid',
            //'sid',
            'date_scheduled',
            //'status',
            //'created',
        ],
    ]) ?>
<div class="check-in-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model2, 'eid')->hiddenInput(['value'=>$model->eid])->label(false) ?>

    <?= $form->field($model2, 'sid')->hiddenInput(['value'=>$model->sid])->label(false) ?>
	    <?= $form->field($model2, 'available')->dropDownList([ 'unavailable' => 'Unavailable', 'available' => 'Available', ], ['prompt' => 'Select availability'])->label("Store Manager") ?>
	
    <?= $form->field($model2, 'notes')->textarea(['rows' => 6]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
