<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SertificateImages */

$this->title = Yii::t('app', 'Create Sertificate Images');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sertificate Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sertificate-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
