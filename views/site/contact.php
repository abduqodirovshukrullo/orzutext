<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('/app/images/lenta.png');">
    <h3 class="pages-info-title">О компании</h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="">Главная</a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="">О компании</a></li>
    </ul>
</div>

<section class="contact">
    <div class="container">
        <div class="contact-block">
            <div class="contact-info">
                <h4 class="contact-info-title">Ташкентский филиал</h4>
                <div class="contact-info-block">
                    <p>Адрес</p>
                    <div>Республика Узбекистан, г. Ташкент, Алмазарский район, ул. Янги Олмазор 36</div>
                </div>
                <div class="contact-info-block">
                    <p>телефон</p>
                    <div>
                        <a href="">+998 90 175 00 25</a>,<a href="">+998 90 976 41 47</a>
                    </div>
                </div>
            </div>
            <div class="contact-map" id="map"></div>
        </div>
        <div class="contact-block">
            <div class="contact-info">
                <h4 class="contact-info-title">Ташкентский филиал</h4>
                <div class="contact-info-block">
                    <p>Адрес</p>
                    <div>Республика Узбекистан, г. Ташкент, Алмазарский район, ул. Янги Олмазор 36</div>
                </div>
                <div class="contact-info-block">
                    <p>телефон</p>
                    <div>
                        <a href="">+998 90 175 00 25</a>,<a href="">+998 90 976 41 47</a>
                    </div>
                </div>
            </div>
            <div class="contact-map" id="map2"></div>
        </div>
        <div class="contact-block">
            <div class="contact-info">
                <h4 class="contact-info-title">Ташкентский филиал</h4>
                <div class="contact-info-block">
                    <p>Адрес</p>
                    <div>Республика Узбекистан, г. Ташкент, Алмазарский район, ул. Янги Олмазор 36</div>
                </div>
                <div class="contact-info-block">
                    <p>телефон</p>
                    <div>
                        <a href="">+998 90 175 00 25</a>,<a href="">+998 90 976 41 47</a>
                    </div>
                </div>
            </div>
            <div class="contact-map" id="map3"></div>
        </div>
    </div>
    <div class="container">
        <div class="contact-message">
            <h3 class="main-title">Обратная связь</h3>
            <form action="">
                <div class="contact-message-input-block">
                    <input type="text" class="contact-message-input-name" placeholder="ФИО">
                    <input type="text" class="contact-message-input-telefon" placeholder="Телефон">
                </div>
                <div>
                    <textarea name="" class="contact-message-textarea" placeholder="Комментарий"></textarea>
                </div>
            </form>
            <button class="contact-message-btn">Отправить
                <img src="/app/images/tall-arrow.png" alt="">
            </button>
        </div>
    </div>
</section>