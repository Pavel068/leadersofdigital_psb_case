<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuizzesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Викторины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizzes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать викторину', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'points',
            [
                'attribute' => 'is_active',
                'value' => function ($model) {
                    return \app\helpers\Helper::BINARY[$model->is_active];
                }
            ],
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
