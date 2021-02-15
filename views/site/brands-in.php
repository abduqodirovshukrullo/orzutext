<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $this->params['breadTitle'];
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
                    <img src="/app/images/brand2.png" alt="">
                </div>
                <div class="brands-in-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo quo eligendi cum
                    ratione sequi reprehenderit fuga. Quisquam laudantium cum quis inventore magni commodi tempore
                    obcaecati et, reiciendis deserunt nulla.
                    Architecto nam neque saepe quaerat quas alias sint sequi, aut a, recusandae reprehenderit ullam?
                    Pariatur officiis voluptatibus a minus velit. Mollitia corrupti debitis quasi voluptas incidunt
                    nostrum perspiciatis praesentium expedita.
                    Officiis sint quaerat at quasi officia harum magni distinctio, nobis iure dolores accusantium
                    temporibus sequi maxime iusto ipsum aperiam dolorum exercitationem ducimus laudantium autem ipsam.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row brands-in-products-wrap">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="brands-in-products">
                    <div class="brands-in-products-img">
                        <img src="/app/images/man2.png" alt="">
                    </div>
                    <a href="" class="brands-in-products-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna laborum.
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="brands-in-products">
                    <div class="brands-in-products-img">
                        <img src="/app/images/man.png" alt="">
                    </div>
                    <a href="" class="brands-in-products-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna laborum.
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="brands-in-products">
                    <div class="brands-in-products-img">
                        <img src="/app/images/man2.png" alt="">
                    </div>
                    <a href="" class="brands-in-products-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna laborum.
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="brands-in-products">
                    <div class="brands-in-products-img">
                        <img src="/app/images/man.png" alt="">
                    </div>
                    <a href="" class="brands-in-products-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna laborum.
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="brands-in-products">
                    <div class="brands-in-products-img">
                        <img src="/app/images/man2.png" alt="">
                    </div>
                    <a href="" class="brands-in-products-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna laborum.
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-slider-wrap">
        <div class="container">
            <div class="main-title">Наши партнеры</div>
            <div class="logo-slider">
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/gmuzb.png" alt="">
                </div>
                <div class="logo-slider-img">
                    <img src="/app/images/Muradbul.png" alt="">
                </div>
            </div>
        </div>
    </div>