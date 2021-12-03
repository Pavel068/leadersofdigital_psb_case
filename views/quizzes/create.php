<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Quizzes */

$this->title = 'Создать викторину';
$this->params['breadcrumbs'][] = ['label' => 'Викторины', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizzes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
