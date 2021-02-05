<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>

    <p>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('Update') ?>, ['update', <?= $urlParams ?>], ['class' => 'btn btn-primary']) ?>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('Delete') ?>, ['delete', <?= $urlParams ?>], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => <?= $generator->generateString('Are you sure you want to delete this item?') ?>,
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= "<?= " ?>DetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if ($name == 'status') {
            echo "            [\n                'attribute' => 'status',\n                'value' => function (\$model) {\n                    return \$model->status == app\models\BaseModel::STATUS_ACTIVE ? Html::tag('span', Yii::t('$generator->messageCategory', 'Published'), ['class' => 'label label-success']) : Html::tag('span', Yii::t('$generator->messageCategory', 'Not published'), ['class' => 'label label-danger']);\n                },\n                'format' => 'html',\n                'filter' => [\n                    app\models\BaseModel::STATUS_ACTIVE => Yii::t('$generator->messageCategory', 'Published'),\n                    app\models\BaseModel::STATUS_INACTIVE => Yii::t('$generator->messageCategory', 'Not published')\n                ]\n            ],\n";
        } elseif (in_array($name, ['image', 'img', 'src', 'path'])) {
            echo "            [\n                'attribute' => '$name',\n                'value' => function (\$model) {\n                    return Html::img('/uploads/' . \$model->$name, ['style' => 'max-width:100px']);\n                },\n                'format' => 'html'\n            ],\n";
        } elseif (in_array($name, ['images', 'files'])) {
            echo "            [\n                'attribute' => '$name',\n                'value' => function (\$model) {\n                    \$result = '';\n                    foreach (\$model->$name as \$item) {\n                        \$result .= Html::img('/uploads/' . \$model->$name, ['style' => 'max-width:50px']);\n                    }\n                    return \$result;\n                },\n                'format' => 'html'\n            ],\n";
        }
        else {
            echo "            '" . $name . "',\n";
        }
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if ($column->name == 'status') {
            echo "            [\n                'attribute' => 'status',\n                'value' => function (\$model) {\n                    return \$model->status == app\models\BaseModel::STATUS_ACTIVE ? Html::tag('span', Yii::t('$generator->messageCategory', 'Published'), ['class' => 'label label-success']) : Html::tag('span', Yii::t('$generator->messageCategory', 'Not published'), ['class' => 'label label-danger']);\n                },\n                'format' => 'html',\n                'filter' => [\n                    app\models\BaseModel::STATUS_ACTIVE => Yii::t('$generator->messageCategory', 'Published'),\n                    app\models\BaseModel::STATUS_INACTIVE => Yii::t('$generator->messageCategory', 'Not published')\n                ]\n            ],\n";
        } elseif (in_array($column->name, ['image', 'img', 'src', 'path'])) {
            echo "            [\n                'attribute' => '$column->name',\n                'value' => function (\$model) {\n                    return Html::img('/uploads/' . \$model->$column->name, ['style' => 'max-width:100px']);\n                },\n                'format' => 'html'\n            ],\n";
        } elseif (in_array($column->name, ['images', 'files'])) {
            echo "            [\n                'attribute' => '$column->name',\n                'value' => function (\$model) {\n                    \$result = '';\n                    \$items = json_decode(\$model->$column->name);\n                    if(is_array(\$items)){\n                        foreach (\$items as \$item) {\n                            \$result .= Html::img('/uploads/' . \$item, ['style' => 'max-width:50px']);\n                        }\n                        return \$result;\n                    }\n                },\n                'format' => 'html'\n            ],\n";
        }
        else {
            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>
        ],
    ]) ?>

</div>
