<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Translater $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="translater-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_zone')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?php // = $form->field($model, 'deleted_at')->textInput()?>

    <?php // = $form->field($model, 'created_at')->textInput()?>

    <?php // = $form->field($model, 'updated_at')->textInput()?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
