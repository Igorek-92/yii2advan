<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_country')->dropDownList(ArrayHelper::map(\common\models\Country::find()->all(), 'id_country', 'name')) ?>

    <?= $form->field($model, 'id_region')->dropDownList(ArrayHelper::map(\common\models\Region::find()->all(), 'id_region', 'name')) ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
