<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OurAdvantage */

$this->title = Yii::t('app', 'Create Our Advantage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-advantage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
