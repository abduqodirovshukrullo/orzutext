<?php

/* @var $this yii\web\View */
use app\models\Products;
$this->title = 'Orzu - tekst';
?>
    <div class="main-slider">
    <?php foreach($carousel as $item): ?>
        <div class="main-slider-item" style="background-image: url('<?= '/uploads/'.$item->image ?>');">
            <div class="main-slider-info">
                <h2 class="main-slider-title">
                    <?= $item->title ?>
                </h2>
                <p class="main-slider-text">
                    <?= $item->subContent ?>
                </p>
                <button class="main-slider-btn">Подробнее</button>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <div class="container">
        <div class="main-about" data-aos="fade-up">
            <div class="main-about-img-block ">
                <div class="main-about-img-block-bg"></div>
                <div class="main-about-img-block-item">
                    <img src="<?= '/uploads/'.$about->image ?>" alt="">
                </div>
            </div>
            <div class="main-about-text-wrap">
                <div class="main-title"><?= $about->title ?></div>
                <div class="main-about-text-wrap-text">
                    <?= $about->subContent ?>
                </div>
                <div class="main-about-text-wrap-info-block">
                       <?php foreach($about->options as $k=>$item): ?>
                            <div class="main-about-text-wrap-info"> <span><?= $k+1 ?></span><?= $item ?></div>
                        <?php endforeach; ?>
                </div>
                <div class="main-about-text-wrap-btn-block">
                    <a class="main-about-text-wrap-btn1" href="/site/about">Подробнее</a>
                    <a class="main-about-text-wrap-btn2" href="/site/video">Смотреть видео
                        <img src="/app/images/play-icon.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-tower" data-aos="fade-up">
            <div class="main-tower-btn-block control-filter">
                <button class="main-tower-btn1 filter" data-filter=".filter_1">Полотно</button>
                <button class="main-tower-btn2 filter active" data-filter=".filter_2">Ткани</button>
            </div>
            <div class="row filtering" id="MixItUpE4BE3F">
                <?php foreach($products as $item):  ?>
                    <?php if($item->parent_id==Products::POLOTNO): ?>
                       
                        <div class="col-xl-3 col-lg-3 col-md-6 col-6 main-tower-mix mix filter_1" data-order="1">
                            <a href="<?= yii\helpers\Url::to(['/site/polotno-in','id'=>$item->id]) ?>">
                                <div class="main-tower-box-img" style="background-image: url('<?= '/uploads/'.$item->image ?>');">
                                    <div class="main-tower-box-text"><?= $item->title ?></div>
                                </div>
                            </a>    
                        </div>
                      
                    <?php elseif($item->parent_id==Products::FABRICS): ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-6 main-tower-mix  mix filter_2" data-order="2">
                        <a href="<?= yii\helpers\Url::to(['/site/product-in','id'=>$item->id]) ?>">
                            <div class="main-tower-box-img" style="background-image: url('<?= '/uploads/'.$item->image ?>');">
                                <div class="main-tower-box-text"><?= $item->title ?></div>
                            </div>
                            </a>
                        </div>
                    <?php endif;?>
                <?php endforeach; ?>
            </div>
            <button href="<?= yii\helpers\Url::to(['/site/polotno']) ?>" class="main-tower-middle-btn">Посмотреть все</button>
        </div>
    </div>

    <div class="main-patrners">
        <div class="container">
            <div class="main-title">контрактное производство</div>
            <div class="main-patrners-wrap">
                <?php foreach($contract as $item): ?>
                <a href="<?= yii\helpers\Url::to(['/site/contract','id'=>$item->id]) ?>" class="main-patrners-block" data-aos="flip-left">
                    <div class="main-patrners-item" style="background-image: url('<?= '/uploads/'.$item->main_image ?>');"></div>
                    <div class="main-patrners-item">
                        <div class="main-patrners-item-title"><?= $item->title ?></div>
                        <div class="main-patrners-item-img">
                            <img src="<?= '/uploads/'.$item->image ?>" alt="">
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
                
            </div>
            <button class="main-tower-middle-btn">Посмотреть все</button>
        </div>
    </div>

    <div class="container">
        <div class="main-uniform">
            <div class="main-title">Униформа</div>
            <div class="row">
                <?php foreach($uniform as $item): ?>
                    <div class="col-xl-4" data-aos="fade-down-right">
                        <div class="main-uniform-block">
                            <div class="main-uniform-img" style="background-image: url('<?= '/uploads/'.$item->image ?>');"></div>
                            <a href="<?= yii\helpers\Url::to(['/site/uniform','id'=>$item->id]) ?>" class="main-uniform-title"><?= $item->title ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="main-tower-middle-btn">Посмотреть все</button>
        </div>
    </div>

    <div class="container">
        <div class="product">
            <div class="main-title">Наши бренды</div>
            <div class="product-btn-block control-filter">
                <button class="product-btn1 filter" data-filter=".brand_1">Детская</button>
                <button class="product-btn2 filter active" data-filter=".brand_2">Мужская</button>
                <button class="product-btn3 filter" data-filter=".brand_3">Женская</button>
            </div>
            <div class="row filtering" id="MixItUpE4">
                <div class="col-xl-4 brand-mix mix brand_1">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/honey.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_2">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/hilfiger.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_3">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/honey.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_1">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/honey.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_2">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/hilfiger.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_3">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/honey.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_1">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/honey.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_2">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/glore-jeans.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-xl-4 brand-mix mix brand_3">
                    <a href="" class="product-block" style="background-image: url('/app/images/man.png');">
                        <div class="product-inner-wrap">
                            <h6 class="product-inner-title">Tempor incididunt</h6>
                            <div class="product-inner">
                                <h6 class="product-inner-title">By</h6>
                                <img src="/app/images/zara.png" alt="">
                            </div>
                        </div>

                    </a>
                </div>
            </div>
            <button class="main-tower-middle-btn">Посмотреть все</button>
        </div>
    </div>

    <div class="container">
        <div class="main-uniform main-news">
            <div class="main-title">Новости</div>
            <div class="row">
                <?php foreach($news as $item) :?>
                    <div class="col-xl-4">
                        <div class="main-uniform-block">
                            <div class="main-uniform-img main-news-img"
                                style="background-image: url('<?= '/uploads/'.$item->image ?>');">
                                <div class="main-news-date"><?= $item->date ?></div>
                            </div>
                            <a href="<?= yii\helpers\Url::to(['/site/news-in','id'=>$item->id]) ?>" class="main-uniform-title"><?= $item->title ?></a>
                            <div class="main-news-text">
                                <?= $item->subContent ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="main-tower-middle-btn">Все новости</button>
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