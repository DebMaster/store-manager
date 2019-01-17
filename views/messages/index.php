<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Users;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Compose new messages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'_from',
			[
		'format' => 'html',	 
       'label' => 'From',
       'value' => function ($model) {
		   if($model->_from == Yii::$app->user->identity->id){
			   return "Me";
		   }else{
		   $employee=Users::find()->where(['id'=>$model->_from])->one();
           if($employee){
			   return $employee->name;
		   }else{
			   return "Employee Missing";
		   }
		   }
       }
     ],[
		'format' => 'html',	 
       'label' => 'To',
       'value' => function ($model) {
		   if($model->_to == Yii::$app->user->identity->id){
			   return "Me";
		   }else{
		   $employee=Users::find()->where(['id'=>$model->_from])->one();
           if($employee){
			   return $employee->name;
		   }else{
			   return "Employee Missing";
		   }
		   }
       }
     ],
            //'_to',
            'message:ntext',
            'created',

            [
          'class' => 'yii\grid\ActionColumn',
          'header' => 'Actions',
          'headerOptions' => ['style' => 'color:#337ab7'],
          'template' => '{view}{delete}',
          'buttons' => [
		  'start' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-plus"></span>', $url, [
                            'title' => 'Start Store Tour',
                ]);
            },
            'view' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-eye"></span>', $url, [
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
        ],
    ]); ?>
</div>
