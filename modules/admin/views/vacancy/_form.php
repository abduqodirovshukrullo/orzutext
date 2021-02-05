<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vacancy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'base_file')->widget(trntv\filekit\widget\Upload::className(), ['url' => app\models\BaseModel::FILE_UPLOAD_URL, 'maxFileSize' => 1000000]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_content_uz')->widget(mihaildev\ckeditor\CKEditor::className(), ['editorOptions' => mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', ['height' => 500])]) ?>

    <?= $form->field($model, 'sub_content_ru')->widget(mihaildev\ckeditor\CKEditor::className(), ['editorOptions' => mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', ['height' => 500])]) ?>

    <?= $form->field($model, 'sub_content_en')->widget(mihaildev\ckeditor\CKEditor::className(), ['editorOptions' => mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', ['height' => 500])]) ?>

    <?= $form->field($model, 'section_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([app\models\BaseModel::STATUS_ACTIVE => Yii::t('app', 'Published'), app\models\BaseModel::STATUS_INACTIVE => Yii::t('app', 'Not Published')]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
