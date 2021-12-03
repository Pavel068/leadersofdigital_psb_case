<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersTasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Присвоенные задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-tasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Присвоить задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'user_id',
                'value' => function ($model) {
                    $user = \app\models\Users::find()->where(['id' => $model->id])->one();
                    return $user ? $user->name : null;
                }
            ],
            [
                'attribute' => 'task_id',
                'value' => function ($model) {
                    $task = \app\models\Tasks::find()->where(['id' => $model->id])->one();
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
