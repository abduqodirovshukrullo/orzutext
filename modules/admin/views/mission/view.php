<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Missions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'image',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->image, ['style' => 'max-width:100px']);
                },
                'format' => 'html'
            ],
            'title_uz',
            'title_en',
            'title_ru',
            'sub_content_uz:ntext',
            'sub_content_ru:ntext',
            'sub_content_en:ntext',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == app\models\BaseModel::STATUS_ACTIVE ? Html::tag('span', Yii::t('app', 'Published'), ['class' => 'label label-success']) : Html::tag('span', Yii::t('app', 'Not published'), ['class' => 'label label-danger']);
                },
                'format' => 'html',
                'filter' => [
                    app\models\BaseModel::STATUS_ACTIVE => Yii::t('app', 'Published'),
                    app\models\BaseModel::STATUS_INACTIVE => Yii::t('app', 'Not published')
                ]
            ],
            'order',
        ],
    ]) ?>

</div>
