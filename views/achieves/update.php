<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Achieves */

$this->title = 'Обновить ачивку: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ачивки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="achieves-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
