<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contratcs */

$this->title = Yii::t('app', 'Create Contratcs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contratcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contratcs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
