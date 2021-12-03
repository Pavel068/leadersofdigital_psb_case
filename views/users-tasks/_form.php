<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersTasks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Users::find()->where(['role' => 'novice'])->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'task_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Tasks::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'is_complete')->dropDownList(\app\helpers\Helper::BINARY) ?>

    <?= $form->field($model, 'deadline')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
