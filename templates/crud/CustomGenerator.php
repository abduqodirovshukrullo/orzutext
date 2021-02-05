<?php

namespace app\templates\crud;

use yii\gii\generators\crud\Generator;
use yii\helpers\Inflector;
use yii\helpers\VarDumper;

/**
 * Created by PhpStorm.
 * User: Farhodjon
 * Date: 26.09.2018
 * Time: 16:06
 */

class CustomGenerator extends Generator
{
    public static $notSupportedAttributes = ['created_at', 'updated_at'];

    /**
     * Generates code for active field
     * @param string $attribute
     * @return string
     */
    public function generateActiveField($attribute)
    {
        $tableSchema = $this->getTableSchema();
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "\$form->field(\$model, '$attribute')->passwordInput()";
            }

            return "\$form->field(\$model, '$attribute')";
        }
        $column = $tableSchema->columns[$attribute];
        if ($column->phpType === 'boolean') {
            return "\$form->field(\$model, '$attribute')->checkbox()";
        }

        if ($column->type === 'text') {
            return "\$form->field(\$model, '$attribute')->widget(mihaildev\ckeditor\CKEditor::className(), ['editorOptions' => mihaildev\\elfinder\\ElFinder::ckeditorOptions('elfinder', ['height' => 500])])";
        }

        if ($attribute === 'status') {
            return "\$form->field(\$model, '$attribute')->dropDownList([app\models\BaseModel::STATUS_ACTIVE => Yii::t('$this->messageCategory', 'Published'), app\models\BaseModel::STATUS_INACTIVE => Yii::t('$this->messageCategory', 'Not Published')])";
        }

        if (in_array($attribute,['image', 'img', 'src', 'path', 'file'] )) {
            return "\$form->field(\$model, 'base_file')->widget(trntv\\filekit\\widget\\Upload::className(), ['url' => app\models\BaseModel::FILE_UPLOAD_URL, 'maxFileSize' => 1000000])";
        }

        if (in_array($attribute,['images', 'files'] )) {
            return "\$form->field(\$model, 'base_files')->widget(trntv\\filekit\\widget\\Upload::className(), ['url' => app\models\BaseModel::FILE_UPLOAD_URL, 'maxFileSize' => app\models\BaseModel::MAX_FILE_UPLOAD_SIZE, 'maxNumberOfFiles' => app\models\BaseModel::MAX_UPLOAD_FILE, 'sortable' => true])";
        }

        if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name)) {
            $input = 'passwordInput';
        } else {
            $input = 'textInput';
        }

        if (is_array($column->enumValues) && count($column->enumValues) > 0) {
            $dropDownOptions = [];
            foreach ($column->enumValues as $enumValue) {
                $dropDownOptions[$enumValue] = Inflector::humanize($enumValue);
            }
            return "\$form->field(\$model, '$attribute')->dropDownList("
                . preg_replace("/\n\s*/", ' ', VarDumper::export($dropDownOptions)).", ['prompt' => ''])";
        }

        if ($column->phpType !== 'string' || $column->size === null) {
            return "\$form->field(\$model, '$attribute')->$input()";
        }

        return "\$form->field(\$model, '$attribute')->$input(['maxlength' => true])";
    }
}