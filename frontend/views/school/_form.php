<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\School */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- //$form->field($model, 'id')->textInput() ?-->

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!--?=// $form->field($model, 'logo')->textInput(['maxlength' => true]) ?-->

    <?= $form->field($model, 'about')->textArea(['rows' => 3]) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <!-- //$form->field($model, 'registered_at')->textInput() -->

    <!--  //$form->field($model, 'user_id')->textInput() -->
    <?= $form->field($model, 'file')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Update' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
