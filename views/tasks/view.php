<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tasks */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tasks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'department',
                'value' => function ($model) {
                    return \app\helpers\Helper::DEPARTMENTS[$model->department];
                }
            ],
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return \app\helpers\Helper::TASK_TYPES[$model->type];
                }
            ],
            'name',
            'description:ntext',
            'content_url:url',
            [
                'attribute' => 'quiz_id',
                'value' => function ($model) {
                    $quiz = \app\models\Quizzes::find()->where(['id' => $model->id])->one();
                    return $quiz ? $quiz->name : null;
                }
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
