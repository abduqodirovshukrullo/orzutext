<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = $data->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?= '/uploads/' . $this->params['breadImage'] ?>');">
    <h3 class="pages-info-title"><?= $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="javascript:void(0)"><?= $this->title ?></a></li>
    </ul>
</div>

<section class="polotno-in">
    <div class="container">
        <h2 class="main-title"><?= $data->title; ?></h2>
        <div class="contract-in-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores commodi
            delectus nam soluta officia natus tempora omnis dolore architecto tempore sapiente, quae nesciunt
            pariatur itaque facilis id obcaecati impedit iusto?
            Error sint, vel, maiores sequi consequuntur magnam iure sit asperiores ipsum optio corporis aut
            commodi voluptatum eos ex? Consequatur quae sed fugit rerum veritatis eos? Necessitatibus saepe ab
        </div>
        <div class="row polotno-block">
            <?php foreach ($data->galleryPhotos as $item) : ?>
                <div class="col-xl-3 col-lg-3 main-tower-mix">
                    <a class="main-tower-box-img" style="background-image: url('<?= '/uploads/' . $item->image ?>');">
                        <div class="main-tower-box-text"><?= $data->title ?></div>
                        <div class="main-tower-box-icon">
                            <img src="/app/images/search.png" alt="">
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container">
        <div class="partners">
            <h2 class="main-title partners-title"><?= Yii::t('app', 'Нам доверяют'); ?></h2>
            <div class="partners-block">
                <?php foreach ($partners as $item) : ?>
                    <a href="" class="partners-item">
                        <img src="<?= '/uploads/' . $item->image ?>" alt="">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>