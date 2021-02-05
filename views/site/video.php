<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
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

    <div class="container">
        <div class="media-video">
            <div class="media-main-video">
                <video class="media-main-video-item " id="mainVideo">
                    <source src="/app/video/Liver.mp4" type="video/mp4">
                </video>
                <div class="media-video-play">
                    <img src="/app/images/play.png" alt="">
                </div>
            </div>
            <div class="row media-video-wrap">
            <?php foreach($video as $item): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="media-video-block">
                        <a href="<?= '/uploads/'.$item->image ?>" class="media-video-block-item" data-fancybox="zoom-video">
                            <video class="media-video-item">
                                <source src="<?= '/uploads/'.$item->image ?>" type="video/MP4">
                            </video>
                            <div class="media-video-play-two">
                                <img src="/app/images/play.png" alt="">
                            </div>
                            <div class="media-video-title">
                                <?= $item->title ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>