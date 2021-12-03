<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Achieves */

$this->title = 'Создать ачивку';
$this->params['breadcrumbs'][] = ['label' => 'Ачивки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achieves-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
