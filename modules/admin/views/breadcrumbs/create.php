<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Breadcrumbs */

$this->title = Yii::t('app', 'Create Breadcrumbs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Breadcrumbs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumbs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
