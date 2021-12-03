<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
