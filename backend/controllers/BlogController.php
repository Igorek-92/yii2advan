<?php

namespace backend\controllers;

use Yii;
use common\models\Blog;
use common\models\BlogSearch;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Blog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Blog();
        if ($model->load(Yii::$app->request->post())) {
//        echo '<pre>';
//        print_r(Yii::$app->request->post());
//        echo '</pre>';die;
            $model->author = Yii::$app->user->id;
            if ($model->validate() && $model->save()) {
                return $this->redirect(['blog/index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if (!yii::$app->user->can('updateOwnBlog', ['blog' => $model])) {
            throw new ForbiddenHttpException('Нет прав');
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws ForbiddenHttpException
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if (!yii::$app->user->can('updateOwnBlog', ['blog' => $model])) {
            throw new ForbiddenHttpException('Нет прав');
        }

        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */


    public function actionCheck()
    {
        $model = new Blog();
        $model->status_id = Blog::find()->where('status_id')->all();
        if ($model->load(Yii::$app->request->post())) {
            $model->status_id = Yii::$app->request->post()['Blog']['status_id'];
            $model->save();
        }
        $model->save();
//        echo '<pre>';
//        print_r(Yii::$app->request->post());
//        echo '</pre>';die;
        return $this->render('check', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
