<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersTasks */

$this->title = 'Create Users Tasks';
$this->params['breadcrumbs'][] = ['label' => 'Users Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-tasks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
