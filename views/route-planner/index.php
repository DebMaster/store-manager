<?php
use app\models\Users;
use app\models\Store;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Route Planners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-planner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Start Tour', ['tour'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            //'eid',
			[
		'format' => 'html',	 
       'label' => 'Employee',
       'value' => function ($model) {
		   $employee=Users::find()->where(['id'=>$model->eid])->one();
           if($employee){
			   return $employee->name;
		   }else{
			   return "Name Missing";
		   }
       }
     ],[
		'format' => 'html',	 
       'label' => 'Store',
       'value' => function ($model) {
		   $employee=Store::find()->where(['id'=>$model->sid])->one();
           if($employee){
			   return $employee->name;
		   }else{
			   return "Store Missing";
		   }
       }
     ],[
		'format' => 'html',	 
       'label' => 'Aaddress',
       'value' => function ($model) {
		   $employee=Store::find()->where(['id'=>$model->sid])->one();
           if($employee){
			   return $employee->address;
		   }else{
			   return "Address Missing";
		   }
       }
     ],[
		'format' => 'html',	 
       'label' => 'Phone',
       'value' => function ($model) {
		   $employee=Store::find()->where(['id'=>$model->sid])->one();
           if($employee){
			   return $employee->phone;
		   }else{
			   return "Phone Missing";
		   }
       }
     ],[
		'format' => 'html',	 
       'label' => 'Email',
       'value' => function ($model) {
		   $employee=Store::find()->where(['id'=>$model->sid])->one();
           if($employee){
			   return $employee->email;
		   }else{
			   return "Email Missing";
		   }
       }
     ],
            //'sid',
            'date_scheduled',
            'status',
			[
          'class' => 'yii\grid\ActionColumn',
          'header' => 'Actions',
          'headerOptions' => ['style' => 'color:#337ab7'],
          'template' => '{view}',
          'buttons' => [
		  'start' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url, [
                            'title' => 'Start Store Tour',
                ]);
            },
            'view' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url, [
                            'title' => 'View',
                ]);
            },

            'update' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => 'Edit',
                ]);
            },
            'delete' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => 'Delete',
                ]);
            }

          ],
          'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'view') {
                $url ='index.php?r=route-planner/view&id='.$model->id;
                return $url;
            }

            if ($action === 'update') {
                $url ='index.php?r=client-login/lead-update&id='.$model->id;
                return $url;
            }
            if ($action === 'delete') {
                $url ='index.php?r=client-login/lead-delete&id='.$model->id;
                return $url;
            }

          }
          ],
            //'created',
           //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
