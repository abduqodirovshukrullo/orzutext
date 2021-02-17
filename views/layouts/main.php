<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Categories;
use app\models\BaseModel;
use app\models\Services;
use app\models\Socials;
use app\models\Contacts;

$socials = Socials::find()->where(['status' => BaseModel::STATUS_ACTIVE])->orderBy(['order' => SORT_ASC])->one();
$categories = Categories::find()->where(['status' => BaseModel::STATUS_ACTIVE])->orderBy(['order' => SORT_ASC])->all();
$services = Services::find()->where(['status' => BaseModel::STATUS_ACTIVE])->orderBy(['order' => SORT_ASC])->all();
$contacts = Contacts::find()->where(['status' => BaseModel::STATUS_ACTIVE])->orderBy(['order' => SORT_ASC])->one();
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
                <a href="/" class="header-center-logo">
                    <img src="/app/images/logo.png" alt="">
                </a>
                <div class="header-center-container">
                    <div class="header-center-container-top">
                        <a href="tel:<?= $contacts->phone ?>"><?= $contacts->phone ?></a>
                        <a href="" class="header-center-container-top-whatsapp">
                            <p>Написать в whatsapp</p>
                            <img src="/app/images/whatsapp.png" alt="">
                        </a>
                    </div>
                    <div class="header-center-container-bottom">
                        <ul class="header-menu">
                            <a href="/" class="header-menu-logo">
                                <img src="/app/images/logo.png" alt="">
                            </a>
                            <li><a>О компании</a>
                                <ul class="sub-menu">
                                    <li><a href="/site/about">О нас</a></li>
                                    <li><a href="/site/certificates">Дипломы и сертификаты</a></li>
                                    <li><a href="/site/milestones">История</a>
                                    </li>
                                    <!-- <li><a href="">Our clients</a></li>
                                    <li><a href="">Honey</a></li>
                                    <li><a>others</a>
                                        <ul class="sub-menu">
                                            <li><a href="">man</a></li>
                                            <li><a href="">woman</a></li>
                                            <li><a href="">kids</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="active"><a href="/site/brands">Наши бренды</a></li>
                            <li><a>продукция</a>
                                <ul class="sub-menu">
                                    <?php foreach ($categories as $item) : ?>
                                        <li><a href="<?= $item->link ?>"><?= $item->title ?></a></li>
                                    <?php endforeach; ?>

                                </ul>
                            </li>
                            <li><a>Услуги</a>
                                <ul class="sub-menu">
                                    <?php foreach ($services as $item) : ?>
                                        <li><a href="<?= Url::to(['/site/services', 'id' => $item->id]) ?>"><?= $item->title ?></a>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            </li>
                            <li><a>Пресс-центр</a>
                                <ul class="sub-menu">
                                    <li><a href="/site/news">Новости</a></li>
                                    <li><a href="/site/video">Видео галерея</a>
                                    <li><a href="/site/photo">Фотогалерея</a>

                                </ul>
                            </li>
                            <li><a href="/site/vacancy">карьера</a></li>
                            <li><a href="/site/contact">контакты</a></li>
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
                <p><?= strtoupper(Yii::$app->language) ?></p>
                <img src="/app/images/arrow.png" alt="">
                <div class="header-lang-bottom">
                    <p class="header-lang-bottom-link"> <a href="/site/set-language?l=uz"> Uz</a></p>
                    <p class="header-lang-bottom-link"> <a href="/site/set-language?l=ru"> Ru</a></p>
                    <p class="header-lang-bottom-link"> <a href="/site/set-language?l=en"> En</a></p>
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
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/about">О нас</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/certificates">Дипломы и
                            сертификаты</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link active" href="/site/milestones">История</a>
                    </li>
                    <!-- <li class="footer-menu-item"><a class="footer-menu-link" href="">Наши клиенты</a></li> -->
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/brands">Наши бренды</a></li>
                    <!-- <li class="footer-menu-item"><a class="footer-menu-link" href="">Honey
                        </a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="">Другие</a></li> -->
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="javascript:void(0)">ПРОДУКЦИЯ</a>
                    </li>
                    <?php foreach ($categories as $item) : ?>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?= $item->link ?>"><?= mb_strtoupper($item->title) ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="javascript:void(0)">УСЛУГИ</a></li>
                    <?php foreach ($services as $item) : ?>
                        <li class="footer-menu-item"><a class="footer-menu-link" href="<?= Url::to(['/site/services', 'id' => $item->id]) ?>"><?= $item->title ?>
                            </a></li>
                    <?php endforeach; ?>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="javascript:void(0)">ПРЕСС-ЦЕНТР</a>
                    </li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/news">Новости</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/video">Видео галерея</a></li>
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/photo">Фотогалерея</a></li>

                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/vacancy">КАРЬЕРА</a></li>

                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a class="footer-menu-link" href="/site/contact">КОНТАКТЫ</a></li>

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
                            <a href="<?= $socials->telegram ?>">
                                <img src="/app/images/telegram.png" alt="">
                            </a>
                        </div>
                        <div class="footer-social-icon active">
                            <a href="<?= $socials->facebook ?>">
                                <img src="/app/images/facebok.png" alt="">
                            </a>
                        </div>
                        <div class="footer-social-icon">
                            <a href="<?= $socials->instagram ?>">
                                <img src="/app/images/insta.png" alt="">
                            </a>
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