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
<section class="news-in">
    <div class="container">
        <div class="news-in-img-block">
            <img src="<?= '/uploads/' . $data->image ?>" alt="">
            <p><?= $data->date  ?></p>
        </div>
        <h3 class="contract-in-title"><?= $data->title ?></h3>
        <div class="contract-in-text">
            <?= $data->content ?>
        </div>
    </div>
</section>