<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SertificateTexts */

$this->title = Yii::t('app', 'Create Sertificate Texts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sertificate Texts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sertificate-texts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
