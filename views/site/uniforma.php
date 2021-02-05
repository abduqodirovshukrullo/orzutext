<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = $product->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?='/uploads/'.$this->params['breadImage']?>');">
    <h3 class="pages-info-title wow tada"><?=  $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="javascript:void(0)"><?=  $this->title ?></a></li>
    </ul>
</div>

<section class="uniform">
    <div class="container">
        <h3 class="main-title"><?= $this->title ?></h3>
        <div class="contract-in-text">
            <?= $product->content ?>
        </div>
    </div>
    <div class="container">
        <div class="counter">
            <div class="counter-block">
                <?php foreach($numbers as $item): ?>
                    <div class="counter-item">
                        <div class="counter-item-title"><?= $item->number ?></div>
                        <div class="counter-item-text"><?= $item->title ?></div>
                    </div>
                <?php endforeach; ?>
               
            </div>
        </div>
    </div>
    <div class="factory">
        <div class="container">
            <div class="row">
            <?php foreach($tools as $item): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="factory-block">
                        <div class="factory-img">
                            <img src="<?= '/uploads/'.$item->image ?>" alt="">
                        </div>
                        <a href="" class="factory-title"><?= $item->title ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sort">
            <h3 class="main-title sort-title">Наши преимущества</h3>
            <div class="row">
                <?php foreach($advantage as $item): ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="sort-block">
                            <div class="sort-img">
                                <img src="<?= '/uploads/'.$item->image ?>" alt="">
                            </div>
                            <a href="" class="factory-title"><?= $item->title ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-uniform">
            <div class="main-title">наши изделия</div>
            <div class="row">
                <?php foreach($products as $item) :?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('<?= '/uploads/'.$item->image ?>');"></div>
                        <a href="" class="main-uniform-title"><?= $item->title ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="work">
        <div class="container">
            <h3 class="main-title work-title">как мы работаем</h3>
            <div class="row">
                <?php foreach($work as $item): ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 work-wrap">
                        <div class="work-block">
                            <div class="work-number"><?= $item->title ?></div>
                            <div class="work-block-title">
                                <?= $item->content ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="partners">
            <h2 class="main-title partners-title"><?= Yii::t('app', 'Нам доверяют'); ?></h2>
            <div class="partners-block">
            <?php foreach($partners as $item): ?>
                <a href="" class="partners-item">
                    <img src="<?= '/uploads/'.$item->image ?>" alt="">
                </a>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>