<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

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
        <div class="brands">
            <div class="brands-block">
                <div class="brands-item">
                    <a href="" class="brands-item-scale">
                        <img src="/app/images/brand1.png" alt="">
                    </a>
                </div>
                <div class="brands-item">
                    <a href="" class="brands-item-scale">
                        <img src="/app/images/brand2.png" alt="">
                    </a>
                </div>
                <div class="brands-item">
                    <a href="" class="brands-item-scale">
                        <img src="/app/images/brand3.png" alt="">
                    </a>
                </div>
                <div class="brands-item">
                    <a href="" class="brands-item-scale">
                        <img src="/app/images/brand3.png" alt="">
                    </a>
                </div>
                <div class="brands-item">
                    <a href="" class="brands-item-scale">
                        <img src="/app/images/brand1.png" alt="">
                    </a>
                </div>
                <div class="brands-item">
                    <a href="" class="brands-item-scale">
                        <img src="/app/images/brand2.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-slider-wrap">
        <div class="container">
            <div class="main-title">Наши партнеры</div>
            <div class="logo-slider">
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
            </div>
        </div>
    </div>