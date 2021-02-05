<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PageTexts */

$this->title = Yii::t('app', 'Create Page Texts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Texts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-texts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
