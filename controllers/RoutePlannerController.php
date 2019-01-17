<?php

namespace app\controllers;

use Yii;
use app\models\RoutePlanner;
use app\models\CheckIn;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoutePlannerController implements the CRUD actions for RoutePlanner model.
 */
class RoutePlannerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all RoutePlanner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => RoutePlanner::find()->where(['eid'=>Yii::$app->user->identity->id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RoutePlanner model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
		$model2 = new CheckIn();
		
		if ($model2->load(Yii::$app->request->post())) {
			if($model2->save(false)){
			            return $this->redirect(['outlet-check/create', 'id' => $id]);	
			}
        }
		
        return $this->render('view', [
            'model' => $this->findModel($id),
			'model2'=>$model2
        ]);
    }

    /**
     * Creates a new RoutePlanner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RoutePlanner();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RoutePlanner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RoutePlanner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
 public function actionFinish($id){
	$model =RoutePlanner::find()->where(['id'=>$id])->one();
    $model->status="visited";
	$model->save();
	return $this->redirect(['index']);
    }
	public function actionKpi(){
	$pending=RoutePlanner::find()->where(['eid'=>Yii::$app->user->identity->id,'status'=>'pending'])->count();
	$visited=RoutePlanner::find()->where(['eid'=>Yii::$app->user->identity->id,'status'=>'visited'])->count();
	$cancelled=RoutePlanner::find()->where(['eid'=>Yii::$app->user->identity->id,'status'=>'cancelled'])->count();
	return $this->render('kpi', [
            'pending' => $pending,
			'visited'=>$visited,
			'cancelled'=>$cancelled,
        ]);
    }
    /**
     * Finds the RoutePlanner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RoutePlanner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RoutePlanner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
