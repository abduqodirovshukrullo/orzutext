<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $this->params['breadTitle'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?= '/uploads/' . $this->params['breadImage'] ?>');">
    <h3 class="pages-info-title"><?= $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="javascript:void(0)"><?= $this->title ?></a></li>
    </ul>
</div>

<section>
    <div class="container">
        <div class="main-about about-first">
            <div class="main-about-img-block about-img-block">
                <div class="about-img">
                    <img src="<?= '/uploads/' . $about->image ?>" alt="">
                </div>
            </div>
            <div class="main-about-text-wrap">
                <div class="main-title"><?= $about->title ?></div>
                <div class="main-about-text-wrap-text"><?= $about->content ?></div>
                <div class="main-about-text-wrap-info-block">

                    <?php foreach ($about->options as $k => $item) : ?>
                        <div class="main-about-text-wrap-info"> <span><?= $k + 1 ?></span><?= $item ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="about-text">
            <div class="main-title"><?= $mission->title ?></div>
            <div class="about-text-item">
                <?= $mission->subContent ?>
            </div>
        </div>
    </div>
</section>

<div class="logo-slider-wrap">
    <div class="container">
        <div class="main-title"><?= Yii::t('app', 'Наши партнеры'); ?></div>
        <div class="logo-slider">
            <?php foreach ($partners as $value) : ?>
                <div class="logo-slider-img">
                    <img src="<?= '/uploads/' . $value->image ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>