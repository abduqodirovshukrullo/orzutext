<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = $this->params['breadTitle'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-info" style="background-image: url('<?= '/uploads/' . $this->params['breadImage'] ?>');">
    <h3 class="pages-info-title"><?= $this->title ?></h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="<?= Yii::$app->homeUrl ?>"><?= Yii::t('app', 'Главная'); ?></a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="javascript:void(0)"><?= $this->title ?></a></li>
    </ul>
</div>

<section class="history">
    <div class="container">
        <div class="contract-in-text"><?= $this->params['pageContent'] ?></div>

        <div class="year-wrap">
            <?php $i = 1;
            foreach ($history as $item) : ?>
                <?php if ($i % 2 !== 0) : ?>
                    <div class="year-item wow bounceInLeft">
                        <div class="year-block">
                            <div class="year-block-title">
                                <span><?= $item->year ?></span>
                                <img src="/app/images/history.png" alt="">
                            </div>
                            <div class="year-text">
                                <h5 class="year-text-title"></h5>
                                <?= $item->title ?>
                                <?= $item->content ?>
                            </div>
                        </div>
                        <div class="year-empty"></div>
                    </div>
                <?php else : ?>
                    <div class="year-item wow bounceInRight">
                        <div class="year-empty"></div>

                        <div class="year-block">
                            <div class="year-block-title">
                                <img src="/app/images/history.png" alt="">
                                <span><?= $item->year ?></span>
                            </div>
                            <div class="year-text">
                                <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">January</h5> -->
                                <?= $item->content ?>
                            </div>


                        </div>
                    </div>
                <?php endif; ?>
            <?php $i++;
            endforeach; ?>

        </div>
    </div>
</section>