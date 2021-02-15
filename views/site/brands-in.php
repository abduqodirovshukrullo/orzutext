<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
$this->title = $brand->title;
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
    <div class="brands-in">
        <div class="brands-in-info">
            <div class="brands-in-img">
                <img src="<?= '/uploads/'.$brand->image ?>" alt="">
            </div>
            <div class="brands-in-text">
                <?= $brand->content ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row brands-in-products-wrap">
        <?php foreach($brand->products as $item): ?>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="brands-in-products">
                    <div class="brands-in-products-img">
                        <img src="<?= '/uploads/'.$item->image ?>" alt="">
                    </div>
                    <a href="<?= Url::to([$item->link,'id'=>$item->id])  ?>" class="brands-in-products-text">
                       <?= $item->title ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="logo-slider-wrap">
    <div class="container">
        <div class="main-title">Наши партнеры</div>
        <div class="logo-slider">
            <?php foreach($partners as $item): ?>
            <div class="logo-slider-img">
                <img src="<?= '/uploads/'.$item->image ?>" alt="">
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>