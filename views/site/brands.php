<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = $this->params['breadTitle'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?='/uploads/'.$this->params['breadImage']?>');">
    <h3 class="pages-info-title wow tada"><?=  $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link"
                href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link"
                href="javascript:void(0)"><?=  $this->title ?></a></li>
    </ul>
</div>
<div class="container">
    <div class="brands">
        <div class="brands-block">
            <?php foreach($brands as $item): ?>
                <div class="brands-item">
                    <a href="<?= Url::to(['/site/brand-in','id'=>$item->id]) ?>" class="brands-item-scale">
                        <img src="<?= '/uploads/'.$item->image ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
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