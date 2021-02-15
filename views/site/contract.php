<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = $contract->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?= '/uploads/' . $this->params['breadImage'] ?>');">
    <h3 class="pages-info-title"><?= $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="javascript:void(0)"><?= $this->title ?></a></li>
    </ul>
</div>

<section class="contract-in">
    <div class="container">
        <div class="contract-in-block">
            <div class="contract-in-img">
                <img src="/app/images/tower.png" alt="">
            </div>
            <h3 class="contract-in-title"><?= $this->title ?></h3>
            <div class="contract-in-text"><?= $contract->content ?></div>
        </div>
    </div>
    <div class="container">
        <div class="contract-img-block">
            <div class="contract-img">
                <img src="<?= '/uploads/' . $contract->left_image ?>" alt="">
            </div>
            <div class="contract-img">
                <img src="<?= '/uploads/' . $contract->right_image ?>" alt="">
            </div>
        </div>
        <div class="contract-btn-block">
            <button class="contract-btn">Информация о станках</button>
            <button class="contract-btn">Прайс-лист</button>
        </div>
        <button class="contract-btn-blue">Отправить заявку
            <img src="/app/images/pen.png" alt="">
        </button>
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