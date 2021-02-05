<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = $this->params['breadTitle'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?='/uploads/'.$this->params['breadImage']?>');">
    <h3 class="pages-info-title wow tada"><?=  $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="javascript:void(0)"><?=  $this->title ?></a></li>
    </ul>
</div>

    <section class="news">
        <div class="container">
            <div class="main-uniform main-news">
                <!-- <div class="main-title">Новости</div> -->
                <div class="row">
                <?php foreach($news as $item): ?>
                    <div class="col-xl-4">
                        <div class="main-uniform-block">
                            <div class="main-uniform-img main-news-img" style="background-image: url('/app/images/uniform.png');">
                                <div class="main-news-date"><?= date($item->date) ?></div>
                            </div>
                            <a href="<?= Url::to(['/site/news-in','id'=>$item->id]) ?>" class="main-uniform-title"><?=  $item->title ?></a>
                            <div class="main-news-text"><?= $item->subContent ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <!-- <button class="main-tower-middle-btn">Все новости</button>
            </div> -->
        </div>
    </section>