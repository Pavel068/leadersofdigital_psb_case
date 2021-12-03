<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsersTasks */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Присвоенные задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-tasks-view">

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
                'attribute' => 'user_id',
                'value' => function ($model) {
                    $user = \app\models\Users::find()->where(['id' => $model->user_id])->one();
                    return $user ? $user->name : null;
                }
            ],
            [
                'attribute' => 'task_id',
                'value' => function ($model) {
                    $task = \app\models\Tasks::find()->where(['id' => $model->task_id])->one();
                    return $task ? $task->name : null;
                }
            ],
            [
                'attribute' => 'is_complete',
                'value' => function ($model) {
                    return \app\helpers\Helper::BINARY[$model->is_complete];
                }
            ],
            'deadline',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
