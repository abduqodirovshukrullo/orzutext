<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OurPartners */

$this->title = Yii::t('app', 'Create Our Partners');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Our Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-partners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
