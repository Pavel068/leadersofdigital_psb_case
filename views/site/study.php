<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-study">

    <div class="body-content">
        <div class="card">
            <div class="card-header">Мои задания</div>
            <div class="card-body">
                <?php
                $tasks = \app\models\Tasks::find()->all();
                ?>

                <div class="tasks">
                    <?php foreach ($tasks as $task): ?>
                        <div class="task">
                            <p class="lead"><?= $task->name ?></p>
                            <p class="text-muted"><?= $task->description ?></p>
                            <a href="<?= $task->content_url ?>" target="_blank">Материал</a>
                            <a class="btn btn-primary" href="">Приступить</a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>
</div>

<style>
    .tasks > .task {
        padding: 5px;
        border: 1px solid #bebebe;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-top: 10px;
    }
</style>