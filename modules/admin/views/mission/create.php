<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = Yii::t('app', 'Create Mission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Missions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
