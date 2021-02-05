<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <header class="header">
        <div class="container">
            <div class="header-wrap">
                <a href="#" class="header-center-logo">
                    <img src="/app/images/logo.png" alt="">
                </a>
                <div class="header-center-container wow fadeInUp">
                    <div class="header-center-container-top">
                        <a href="tel:+998935054505">+998 93 505 45 05</a>
                        <a href="" class="header-center-container-top-whatsapp">
                            <p>Написатьь в whatsapp</p>
                            <img src="/app/images/whatsapp.png" alt="">
                        </a>
                    </div>
                    <div class="header-center-container-bottom">
                        <ul class="header-menu">
                            <a href="#" class="header-menu-logo">
                                <img src="/app/images/logo.png" alt="">
                            </a>
                            <li><a>О компании</a>
                                <ul class="sub-menu">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Diplomas and certificates</a></li>
                                    <li><a href="">History</a>
                                    </li>
                                    <li><a href="">Our clients</a></li>
                                    <li><a href="">Honey</a></li>
                                    <li><a>others</a>
                                        <ul class="sub-menu">
                                            <li><a href="">man</a></li>
                                            <li><a href="">woman</a></li>
                                            <li><a href="">kids</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="active"><a href="">Наши бренды</a></li>
                            <li><a href="">продукция</a></li>
                            <li><a href="">Услуги</a>
                                <ul class="sub-menu">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Diplomas and certificates</a>
                                        <ul class="sub-menu">
                                            <li><a href="">man</a></li>
                                            <li><a href="">woman</a></li>
                                            <li><a href="">kids</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">History</a>
                                    </li>
                                    <li><a href="">Our clients</a></li>
                                    <li><a href="">Honey</a></li>
                                    <li><a>others</a>
                                        <ul class="sub-menu">
                                            <li><a href="">man</a></li>
                                            <li><a href="">woman</a></li>
                                            <li><a href="">kids</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Пресс-центр</a></li>
                            <li><a href="">карьера</a></li>
                            <li><a href="">контакты</a></li>
                            <div class="header-menu-lang">
                                <div class="header-lang-top">
                                    <p>RU</p>
                                    <img src="/app/images/arrow.png" alt="">
                                    <div class="header-lang-bottom">
                                        <p class="header-lang-bottom-link">Uz</p>
                                        <p class="header-lang-bottom-link">Ru</p>
                                    </div>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>
                <div class="ham-menu" onclick="myFunction(this)">
                    <div class="bar1 bar"></div>
                    <div class="bar2 bar"></div>
                    <div class="bar3 bar"></div>
                </div>
            </div>

        </div>


        <div class="header-lang wow slideInRight">
            <div class="header-lang-top">
                <p>RU</p>
                <img src="/app/images/arrow.png" alt="">
                <div class="header-lang-bottom">
                    <p class="header-lang-bottom-link">Uz</p>
                    <p class="header-lang-bottom-link">Ru</p>
                </div>
            </div>
        </div>

    </header>

    <?= $content ?>
    <div class="footer">
        <div class="container">
            <div class="footer-menu-block">
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О компании</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О нас</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Дипломы и сертификаты</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link active" href="">История</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши клиенты</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши бренды</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Honey
                        </a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Другие</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О компании</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О нас</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Дипломы и сертификаты</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">История</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши клиенты</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши бренды</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Honey
                        </a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Другие</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О компании</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О нас</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Дипломы и сертификаты</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">История</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши клиенты</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши бренды</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Honey
                        </a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Другие</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О компании</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">О нас</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Дипломы и сертификаты</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">История</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши клиенты</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Продукция в
                            наличии</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Трикотажное полотно </a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Джинсовая ткань</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Готовые трикотажные изделия</a>
                    </li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href=""> Готовые джинсовые
                            изделия</a></li>
                </ul>
            </div>
            <div class="footer-social-block">
                <div class="footer-logo">
                    <img src="/app/images/logo.png" alt="">
                </div>
                <div class="footer-social-item">
                    <div class="footer-social-name">Социальные сети</div>
                    <div class="footer-social-icons">
                        <div class="footer-social-icon">
                            <img src="/app/images/telegram.png" alt="">
                        </div>
                        <div class="footer-social-icon active">
                            <img src="/app/images/facebok.png" alt="">
                        </div>
                        <div class="footer-social-icon">
                            <img src="/app/images/insta.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-text">“Orzu Teks” Все права защищены</div>
                <div class="footer-bottom-text">© Copyright 2019 - Web developed by <a href="">SOS Group</a> </div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>