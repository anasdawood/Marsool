<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Projects;
use frontend\models\ProjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
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
     * Lists all Projects models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $pagination = new \yii\data\Pagination(['totalCount' => count($dataProvider->models), 'defaultPageSize' => 10]);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'pagination' => $pagination,
                    'models' => $dataProvider->models,
        ]);
    }

    /**
     * Displays a single Projects model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        $model = $this->findModel($id);
        $future = strtotime($model->dead_line); //Future date.
        $timefromdb = time();
        $timeleft = $future - $timefromdb;
        $daysleft = round((($timeleft / 24) / 60) / 60);
        $didLike = \frontend\models\Likes::find()->where(['project_id' => $id, 'user_id' => Yii::$app->user->id])->one();

        return $this->render('view', [
                    'model' => $model,
                    'daysleft' => $daysleft,
                    'didLike' => empty($didLike)
        ]);
    }

    /**
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Projects();
        $model->user = Yii::$app->user->identity->id;
        $model->raised = 0;
        $model->likes = 0;

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                $model->image = $model->imageFile->name;
                $model->imageFile = null;
                if ($model->save())
                    return $this->redirect(['view', 'id' => $model->id]);
            }
        }


        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function actionLike($id) {

        $didLike = \frontend\models\Likes::find()->where(['project_id' => $id, 'user_id' => Yii::$app->user->id])->one();
        if (empty($didLike)) {
            $projectLikes = new \frontend\models\Likes();
            $projectLikes->project_id = $id;
            $projectLikes->user_id = Yii::$app->user->id;
            $projectLikes->save();
            $project = Projects::find()->where(['id' => $id])->one();
            $project->likes = $project->likes + 1;
            $project->save();
            return $project->likes;
        } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'You Already Liked this Project', 'code' => 1337)));
        }
    }

    /**
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('frontend', 'The requested page does not exist.'));
    }

}
