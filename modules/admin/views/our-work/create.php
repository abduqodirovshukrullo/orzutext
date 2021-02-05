<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OurWork */

$this->title = Yii::t('app', 'Create Our Work');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Works'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
