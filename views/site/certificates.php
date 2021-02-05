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
   
    <section class="sertificates">
        <div class="container">
            <div class="sertificates-block">
                <?php foreach($certificateImage as $item): ?>
                <div class="sertificates-item">
                    <a href="<?= '/uploads/'.$item->image ?>" data-fancybox="zoom-img" class="sertificates-img">
                        <img class="sertificates-img-item zoom-fancybox" src="<?= '/uploads/'.$item->image ?>" alt="">
                        <div class="sertificates-search">
                            <img src="/app/images/search.png" alt="">
                        </div>
                    </a>
                     <h4 class="sertificates-title"><?= $item->title ?></h4>
                     <div class="sertificates-text"><?=  $item->content ?></div>
                </div>
                <?php endforeach; ?>
               
            </div>

            <div class="sertificates-text-block">
                <h3 class="contract-in-title"><?= $certificateText->title ?></h3>
                <div class="contract-in-text"><?= $certificateText->content ?></div>
            </div>
        </div>
    </section>
