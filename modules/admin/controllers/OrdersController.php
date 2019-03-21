<?php

namespace app\modules\admin\controllers;
use app\models\Departments;
use app\models\ReverseDelivery;
use app\models\TypePayer;
use kartik\report\Report;
use Yii;
use app\models\Orders;
use app\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class OrdersController extends Controller
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
     * Lists all Orders models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Orders model.
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
     * Creates a new Orders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Orders();

        if(isset($_POST['Orders'])){
            $model->attributes = Yii::$app->request->post('Orders');
            $model->num_premise = $model->getNum();
            $model->price_delivery = $model->getSum();
            $model->date_order = strval(date('Y-m-d'));
            $model->id_moder = Yii::$app->user->identity->id;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id_order]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Orders model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_order]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Orders model.
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

    /**
     * Finds the Orders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Orders::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionCheck($id){
        $order = Orders::findOne($id);
        $report = Yii::$app->report;

// set your template identifier (override global defaults)
        $report->templateId = 1558;
$report->outputFileName = $order->num_premise.'.pdf';

// If you want to override the output file type, uncomment line below
// $report->outputFileType = Report::OUTPUT_DOCX;

// If you want to override the output file action, uncomment line below
// $report->outputFileAction = Report::ACTION_GET_DOWNLOAD_URL;
// Configure your report data. Each of the keys must match the template
// variables set in your MS Word template and each value will be the
// evaluated to replace the Word template variable. If the value is an
// array, it will treated as tabular data.
        $dep = Departments::find()->where(['id_department' => $order->id_department])->one();
        $depa = Departments::find()->where(['id_department' => $order->id_dep_rec])->one();
        $rev_del = ReverseDelivery::find()->where(['id_reverse_del' => $order->reverse_delivery])->one();
        $type_pay = TypePayer::find()->where(['id_payer' => $order->type_payer])->one();
        $report->templateVariables = [
            'num_premise' => $order->num_premise,
            'id_department' => $dep->getFullDepartment(),
            'id_dep_rec' => $depa->getFullDepartment(),
            'pib_sender' => $order->pib_sender,
            'pib_recipient' => $order->pib_recipient,
            'date_order' => $order->date_order,
            'reverse_delivery' => $rev_del->type_reverse_del,
            'type_payer' => $type_pay->name_payer,
            'price_delivery' => $order->price_delivery,
        ];
        return $report->generateReport();
        return $this->redirect(['/orders/view',['id' => $id]]);
    }
}
