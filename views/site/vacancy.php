<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Vacancy';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="pages-info" style="background-image: url('/app/images/lenta.png');">
        <h3 class="pages-info-title wow tada">О компании</h3>
        <ul class="pages-info-menu">
            <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="">Главная</a></li>
            <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="">О компании</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="vacancy">
        <?php foreach($vacancy as $item): ?>
            <div class="vacancy-block">
                <div class="vacancy-item">
                    <div class="vacancy-title"><?= $item->title ?></div>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 444.531 444.531" style="enable-background:new 0 0 444.531 444.531;"
                        xml:space="preserve">
                        <path d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                            l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                            c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                            s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                            L213.13,222.409z" />
                    </svg>
                </div>
                <div class="vacancy-text-block">
                    <div class="vacancy-text">
                        <?= $item->subContent ?>
                    </div>

                    <div class="vacancy-info">
                        <div class="vacancy-info-title"><?= $item->section ?></div>
                        <a href="tel:<?= $item->phone ?>" class="vacancy-info-phone"><?= Yii::t('app', 'Телефон'); ?> <span>+998 93 505 45
                                05</span></a>
                        <div class="vacancy-info-address"><?= Yii::t('app', 'Аддресс'); ?>  <span><?= $item->address ?></span></div>
                    </div>
                    <div class="vacancy-btn-block">
                        <button class="vacancy-btn"><?= Yii::t('app', 'Заполнить резюме'); ?>
                            <img src="/app/images/pen-rectangel.png" alt="">
                        </button>
                        <button class="vacancy-btn"><?= Yii::t('app', 'Отправить резюме'); ?>
                            <img src="/app/images/send.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>