<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OurWork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([app\models\BaseModel::STATUS_ACTIVE => Yii::t('app', 'Published'), app\models\BaseModel::STATUS_INACTIVE => Yii::t('app', 'Not Published')]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
