<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


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

<section class="photo">
    <div class="container">
        <div class="row">
        <?php foreach($gallery as $item): ?>
            <div class="col-xl-4 col-md-6">

                <a href="<?= Url::to(['/site/photo-in','id'=>$item->id]) ?>" class="photo-img">
                    <img src="<?= '/uploads/'.$item->image ?>" alt="">
                </a>
                <a href="<?= Url::to(['/site/photo-in','id'=>$item->id]) ?>" class="photo-title"><?= $item->title ?></a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>