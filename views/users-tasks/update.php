<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersTasks */

$this->title = 'Обновить присвоенную задачу: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Присвоенные задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="users-tasks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
