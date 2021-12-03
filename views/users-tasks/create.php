<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersTasks */

$this->title = 'Присвоить задачу';
$this->params['breadcrumbs'][] = ['label' => 'Присвоенные задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-tasks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
