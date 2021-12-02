<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersTasks */

$this->title = 'Update Users Tasks: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-tasks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
