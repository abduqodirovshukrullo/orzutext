<?php

namespace app\controllers;

use app\models\forms\Login;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\forms\ContactForm;
use app\models\Pages;
use app\models\About;
use app\models\Mission;
use app\models\BaseModel;
use app\models\Partners;
use app\models\SertificateImages;
use app\models\SertificateTexts;
use app\models\History;
use app\models\News;
use app\models\Categories;
use app\models\Products;
use app\models\Vacancy;
use app\models\Video;
use app\models\Carousel;
use app\models\OurPartners;
use app\models\Contratcs;
use app\models\GalleryPhoto;
use app\models\OurWork;
use app\models\OurAdvantage;
use app\models\Numbers;
use app\models\Tools;
class SiteController extends Controller
{
    public function init()
    {
      
        if (!empty(Yii::$app->request->cookies['language'])) {
            Yii::$app->language = Yii::$app->request->cookies['language'];
        } else {
            Yii::$app->language = 'ru';
        }
        parent::init();
    }
    public function beforeAction($action)
    {
        if($action->id!=='index'){
            $this->view->params['breadData'] = Pages::findOne(['title_en'=>$action->id])? Pages::findOne(['title_en'=>$action->id])->breadcrumb:'';
            $this->view->params['pageData'] = Pages::findOne(['title_en'=>$action->id])? Pages::findOne(['title_en'=>$action->id])->pageText:'';
            $this->view->params['breadTitle'] =  $this->view->params['breadData']? $this->view->params['breadData']->title:'';
            $this->view->params['breadImage'] =  $this->view->params['breadData']? $this->view->params['breadData']->image:'';
            $this->view->params['pageContent'] =  $this->view->params['pageData']? $this->view->params['pageData']->content:'';
            $this->view->params['pageTitle'] =  $this->view->params['pageData']? $this->view->params['pageData']->title:'';
     
        }
           return parent::beforeAction($action);
    }
    public function actionSetLanguage($l)
    {
        $langs = ['en', 'ru','uz'];
        if (in_array($l, $langs)) {
            Yii::$app->language = $l;
            Yii::$app->session->set('app_lang', $l);
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'language',
                'value' => $l,
            ]));
        }
        return $this->redirect(Yii::$app->request->referrer);

    }
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $carousel = Carousel::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $about = About::find()->orderBy(['order'=>SORT_DESC])->where(['status'=>BaseModel::STATUS_ACTIVE])->one();
        $products = Products::find()
        ->orWhere(['parent_id'=>Products::POLOTNO])
        ->orWhere(['parent_id'=>Products::FABRICS])
        ->andWhere(['status'=>BaseModel::STATUS_ACTIVE])
        ->orderBy(['order'=>SORT_ASC])->all();
        $contract = Contratcs::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $uniform = Products::find()
        ->andWhere(['parent_id'=>Products::UNIFORM])
        ->andWhere(['status'=>BaseModel::STATUS_ACTIVE])
        ->orderBy(['order'=>SORT_ASC])->all();
        $news = News::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $partners = Partners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('index',[
            'carousel'=>$carousel,
            'about'=>$about,
            'products'=>$products,
            'contract'=>$contract,
            'uniform'=>$uniform,
            'news'=>$news,
            'partners'=>$partners,
        ]);
    }


    public function actionContract($id){
        $contract = Contratcs::findOne(['id'=>$id]);
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('contract',[
            'contract'=>$contract,
            'partners'=>$partners,
        ]);
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }



    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $about = About::find()->orderBy(['order'=>SORT_DESC])->where(['status'=>BaseModel::STATUS_ACTIVE])->one();
        $mission = Mission::find()->orderBy(['order'=>SORT_DESC])->where(['status'=>BaseModel::STATUS_ACTIVE])->one();
        $partners = Partners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();

        return $this->render('about',[
            'about'=>$about,
            'mission'=>$mission,
            'partners'=>$partners,
        ]);
    }

    public function actionCertificates(){
        $certificateImage = SertificateImages::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $certificateText = SertificateTexts::find()->orderBy(['order'=>SORT_DESC])->where(['status'=>BaseModel::STATUS_ACTIVE])->one();
        return $this->render('certificates',[
            'certificateImage'=>$certificateImage,
            'certificateText'=>$certificateText,
        ]);
    }


    public function actionMilestones(){
        $history = History::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('milestones',[
            'history'=>$history,
        ]);
    }
    public function actionNews(){
        $news = News::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('news',[
            'news'=>$news,
        ]);
    }
    public function actionNewsIn($id){
        $data = News::findOne(['id'=>$id]);
        return $this->render('news-in',[
            'data'=>$data,
        ]);
    }
    public function actionPhoto(){
        $gallery = GalleryPhoto::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();

        return $this->render('photo',[
            'gallery'=>$gallery,
        ]);
    }
    public function actionPhotoIn($id){
        $data = GalleryPhoto::findOne(['id'=>$id]);
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('photo-in',[
            'data'=>$data,
            'partners'=>$partners,
        ]);
    }
    public function actionPolotno(){
        $polotno = Products::find()
        ->andWhere(['parent_id'=>Products::POLOTNO])
        ->andWhere(['status'=>BaseModel::STATUS_ACTIVE])
        ->orderBy(['order'=>SORT_ASC])->all();
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
    
        return $this->render('polotno',[
            'products'=>$polotno,
            'partners'=>$partners,
        ]);
    }
    public function actionPolotnoIn($id){

        $polotno = Products::find()
        ->andWhere(['parent_id'=>Products::POLOTNO])->andWhere(['id'=>$id])->one();
        // debug($polotno);
        // exit;
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
    
        return $this->render('polotno-in',[
            'products'=>$polotno,
            'partners'=>$partners,
        ]);
    }
    public function actionFabrics(){
        $polotno = Products::find()
        ->andWhere(['parent_id'=>Products::FABRICS])
        ->andWhere(['status'=>BaseModel::STATUS_ACTIVE])
        ->orderBy(['order'=>SORT_ASC])->all();
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('fabrics',[
            'products'=>$polotno,
            'partners'=>$partners,
        ]);
    }
    public function actionFabricsIn($id){
        $polotno = Products::find()
        ->andWhere(['parent_id'=>Products::FABRICS])->andWhere(['id'=>$id])->one();
        // debug($polotno);
        // exit;
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
    
        return $this->render('polotno-in',[
            'products'=>$polotno,
            'partners'=>$partners,
        ]);
    }
    public function actionProductIn($id){

        $polotno = Products::find()
        ->andWhere(['parent_id'=>Products::FABRICS])->andWhere(['id'=>$id])->one();
        // debug($polotno);
        // exit;
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
    
        return $this->render('polotno-in',[
            'products'=>$polotno,
            'partners'=>$partners,
        ]);
    }
    public function actionUniforma(){
        $id = Yii::$app->request->get('id')?Yii::$app->request->get('id'):'';
        $products = Products::find()
        ->andWhere(['parent_id'=>Products::UNIFORM])
        ->andWhere(['!=','id',$id])
        ->andWhere(['status'=>BaseModel::STATUS_ACTIVE])
        ->orderBy(['order'=>SORT_ASC])->all();
        $product = Products::find()
        ->andWhere(['!=','id',$id])
        ->andWhere(['parent_id'=>Products::UNIFORM])
        ->andWhere(['status'=>BaseModel::STATUS_ACTIVE])
        ->orderBy(['order'=>SORT_ASC])->one();
        $work = OurWork::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $advantage = OurAdvantage::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $partners = OurPartners::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $numbers = Numbers::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        $tools = Tools::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('uniforma',[
            'products'=>$products,
            'work'=>$work,
            'advantage'=>$advantage,
            'partners'=>$partners,
            'numbers'=>$numbers,
            'tools'=>$tools,
            'product'=>$product,
        ]);
    }
    public function actionVacancy(){
        $vacancy = Vacancy::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('vacancy',[
            'vacancy'=>$vacancy,
        ]);
    }
    public function actionVideo(){
        $video = Video::find()->where(['status'=>BaseModel::STATUS_ACTIVE])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('video',[
            'video'=>$video,
        ]);
    }

    public function actionBrands(){
        
        return $this->render('brands');
    }
    public function actionBrandsIn(){
        return $this->render('brands-in');
    }


}
