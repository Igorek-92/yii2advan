<?php

/* @var $this yii\web\View */

use common\models\Blog;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\controllers\BlogController;

/* @var $model common\models\Blog */

$this->title = 'checkboxList';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>checkboxList</h1>
    <?php $form = ActiveForm::begin([
    ]) ?>
    <?= $form->field($model, 'status_id')
        ->checkboxList(Blog::find()->select(['status_id', 'id'])->indexBy('id')->column()) ?>
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>
</div>
<!-- --><?php
//       echo '<pre>';
//       print_r(ArrayHelper::map(Blog::find()->all(), ['id'], ['status_id']));die;
//        echo '</pre>';
// ?>
<!--<div class="site-about">-->
<!--    <h1>checkbox</h1>-->
<!--    --><?php //$form = ActiveForm::begin([
//        'id' => 'form-input-example',
//    ]) ?>
<!--    --><? //= $form->field($model, 'status_id')
//        ->checkbox(array('value'=>1, 'uncheckValue'=>0))?>
<!--    --><? //= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
<!--    --><?php //ActiveForm::end(); ?>
<!--</div>-->

<!---->
<!--<div class="site-about">-->
<!---->
<!--    --><?php //$form = ActiveForm::begin([
//        'id' => 'form-input-example',
//        'options' => [
//            'class' => 'form-horizontal col-lg-11',
//            'enctype' => 'multipart/form-data'
//        ],
//    ]) ?><!--<h1>radio</h1>-->
<!--    --><? //= $form->field($radio, 'title')
//        ->radio(ArrayHelper::map(Blog::find()->all(), 'id', 'title'), [
//            'label' => 'Радио кнопка',
//            'labelOptions' => [
//                'style' => 'padding-left:20px;'
//            ]
//        ])->label(false) ?>
<!--    --><?php //ActiveForm::end(); ?>
<!--</div>-->
<!---->
<!---->
<!--<div class="site-about">-->
<!--    <h1>radioList</h1>-->
<!--    --><?php //$form = ActiveForm::begin([
//        'id' => 'form-input-example',
//        'options' => [
//            'class' => 'form-horizontal col-lg-11',
//            'enctype' => 'multipart/form-data'
//        ],
//    ]) ?>
<!--    --><? //= $form->field($radioList, 'title')
//        ->radioList(ArrayHelper::map(Blog::find()->all(), 'id', 'title'))->label(false) ?>
<!--    --><?php //ActiveForm::end(); ?>
<!--</div>-->
<!---->
<!--<div class="site-about">-->
<!--    --><?php //$form = ActiveForm::begin([
//        'id' => 'form-input-example',
//        'options' => [
//            'class' => 'form-horizontal col-lg-11',
//            'enctype' => 'multipart/form-data'
//        ],
//    ]) ?><!--<h1>listBox</h1>-->
<!--    --><? //= $form->field($listBox, 'title')
//        ->listBox(ArrayHelper::map(Blog::find()->all(), 'id', 'title'), [
//            'multiple' => true,
//            'prompt' => 'Выберите один или несколько вариантов',
//            'style' => 'background:white;color:green; height: 400px;width: 30%;'
//        ]) ?>
<!--    --><?php //ActiveForm::end(); ?>
<!--</div>-->
<!---->
<!--<div class="site-about">-->
<!--    --><?php //$form = ActiveForm::begin([
//        'id' => 'form-input-example',
//        'options' => [
//            'class' => 'form-horizontal col-lg-11',
//            'enctype' => 'multipart/form-data'
//        ],
//    ]) ?><!--<h1>dropDownList</h1>-->
<!--    --><? //= $form->field($dropDownList, 'title')
//        ->dropDownList(ArrayHelper::map(Blog::find()->all(), 'id', 'title'), [
//            'prompt' => 'Выберите один вариант ...',
//            'style' => 'background:white;color:green; width: 30%;'
//        ]) ?>
<!--    --><?php //ActiveForm::end(); ?>
<!--</div>-->
<!---->
