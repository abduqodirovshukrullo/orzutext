<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

    <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>
<?= $generator->enablePjax ? "    <?php Pjax::begin(); ?>\n" : '' ?>
<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

    <p>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= " ?>GridView::widget([
        'dataProvider' => $dataProvider,
        <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            ['class' => 'yii\grid\SerialColumn'],

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if ($name == 'status') {
            $count++;
            echo "            [\n                'attribute' => 'status',\n                'value' => function (\$model) {\n                    return \$model->status == app\models\BaseModel::STATUS_ACTIVE ? Html::tag('span', Yii::t('$generator->messageCategory', 'Published'), ['class' => 'label label-success']) : Html::tag('span', Yii::t('$generator->messageCategory', 'Not published'), ['class' => 'label label-danger']);\n                },\n                'format' => 'html',\n                'filter' => [\n                    app\models\BaseModel::STATUS_ACTIVE => Yii::t('$generator->messageCategory', 'Published'),\n                    app\models\BaseModel::STATUS_INACTIVE => Yii::t('$generator->messageCategory', 'Not published')\n                ]\n            ],\n";
        } elseif (in_array($name, ['image', 'img', 'src', 'path'])) {
            echo "            [\n                'attribute' => '$name',\n                'value' => function (\$model) {\n                    return Html::img('/uploads/' . \$model->$name, ['style' => 'max-width:100px']);\n                },\n                'format' => 'html'\n            ],\n";
        }
        else {
            if (++$count < 6) {
                echo "            '" . $name . "',\n";
            } else {
                echo "            //'" . $name . "',\n";
            }
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if ($column->name == 'status') {
            $count++;
            echo "            [\n                'attribute' => 'status',\n                'value' => function (\$model) {\n                    return \$model->status == app\models\BaseModel::STATUS_ACTIVE ? Html::tag('span', Yii::t('$generator->messageCategory', 'Published'), ['class' => 'label label-success']) : Html::tag('span', Yii::t('$generator->messageCategory', 'Not published'), ['class' => 'label label-danger']);\n                },\n                'format' => 'html',\n                'filter' => [\n                    app\models\BaseModel::STATUS_ACTIVE => Yii::t('$generator->messageCategory', 'Published'),\n                    app\models\BaseModel::STATUS_INACTIVE => Yii::t('$generator->messageCategory', 'Not published')\n                ]\n            ],\n";
        } elseif (in_array($column->name, ['image', 'img', 'src', 'path'])) {
            echo "            [\n                'attribute' => '$column->name',\n                'value' => function (\$model) {\n                    return Html::img('/uploads/' . \$model->$column->name, ['style' => 'max-width:100px']);\n                },\n                'format' => 'html'\n            ],\n";
        }
        else {
            if (++$count < 6) {
                echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
            } else {
                echo "            //'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
            }
        }
    }
}
?>

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function($url, $model) {
                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-eye']) . ' View', $url, ['class' => 'btn btn-success']);
                    },
                    'update' => function($url, $model) {
                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-pencil']) . ' Update', $url, ['class' => 'btn btn-primary']);
                    },
                    'delete' => function($url, $model) {
                        return Html::a(Html::tag('i', '', ['class' => 'mdi mdi-delete']) . ' Delete', $url, [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => <?= $generator->generateString('Are you sure you want to delete this item?') ?>,
                                'method' => 'post',
                            ]
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
<?php else: ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
        },
    ]) ?>
<?php endif; ?>
<?= $generator->enablePjax ? "    <?php Pjax::end(); ?>\n" : '' ?>
</div>
