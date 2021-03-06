<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="card">
        <div class="card-body shadow">
            <div class="row">
                <div class="col-lg-4 d-flex flex-row">
                    <img src="<?= Yii::$app->request->BaseUrl . '/storage/avatar-default.png' ?>" alt="Аватар" style="border-radius: 20px; max-height: 200px;">
                    <div style="margin-left: 20px;">
                        <p class="lead"><?= Yii::$app->getUser()->identity->name ?></p>
                        <p>
                            <span class="text-uppercase"><?= \app\helpers\Helper::RANKS[Yii::$app->getUser()->identity->level] ?></span>
                            <span class="text-success"><?= Yii::$app->getUser()->identity->level ?></span>-го уровня
                        </p>
                        <p><span class="text-success"><?= Yii::$app->getUser()->identity->points ?></span> ПСБоинтов</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="lead">Проект:
                        <span class="font-weight-bold">PSB Project</span>
                        <a href="https://google.com"><i class="fas fa-arrow-circle-right"></i></a>
                    </p>
                    <p>Стек технологий: <span class="font-weight-bold">Node.js, Express, MySQL</span></p>
                    <p>Моя зона ответственности: <span class="font-weight-bold">Разработка API</span></p>
                </div>
                <div class="col-lg-4 team">
                    <p class="lead">Команда:
                        <span class="font-weight-bold">Dream Team #11</span>
                        <a href="https://google.com"><i class="fas fa-arrow-circle-right"></i></a>
                    </p>
                    <div class="d-flex flex-row align-items-center">
                        <img src="<?= Yii::$app->request->BaseUrl . '/storage/avatar-default.png' ?>" alt="Аватар" style="max-height: 30px;">
                        <p style="margin-left: 10px;">Василий Михайлович Г</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <img src="<?= Yii::$app->request->BaseUrl . '/storage/avatar-default.png' ?>" alt="Аватар" style="max-height: 30px;">
                        <p style="margin-left: 10px;">Василий Михайлович Г</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <img src="<?= Yii::$app->request->BaseUrl . '/storage/avatar-default.png' ?>" alt="Аватар" style="max-height: 30px;">
                        <p style="margin-left: 10px;">Василий Михайлович Г</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-content">

        <div class="card mt-lg-3">
            <div class="card-header">Мой прогресс</div>
            <div class="card-body shadow">
                <div class="rank-avatar-wrapper">
                    <?php foreach (\app\helpers\Helper::RANKS as $key => $rank): ?>
                        <img src="<?= Yii::$app->request->BaseUrl . '/storage/ranks/' . ($key + 1) . '.jpg' ?>" alt=""
                             class="rank_avatar <?php if ($key + 1 > Yii::$app->getUser()->identity->level): ?>rank_disabled<?php endif; ?>">
                        <?php if ($key != 9): ?>
                            <i class="fas fa-arrow-right"></i>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="mt-lg-3">
                    <div>
                        Ранг: <span class="font-weight-bold"><?= \app\helpers\Helper::RANKS[Yii::$app->getUser()->identity->level] ?></span>.
                        До следующего уровня:
                        <span class="font-weight-bold"><?= 1000 - Yii::$app->getUser()->identity->experience ?></span> очков опыта.
                    </div>
                    <div class="experience">
                        <div class="experience-full" style="width: <?= (Yii::$app->getUser()->identity->experience / 1000) * 100; ?>%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-lg-3">
            <div class="card-header">Мои награды</div>
            <div class="card-body shadow">
                <div class="achieves">
                    <?php
                    $achieves = [
                        ['url' => Yii::$app->request->BaseUrl . '/storage/achieves/1.jpg', 'description' => 'Надежный'],
                        ['url' => Yii::$app->request->BaseUrl . '/storage/achieves/2.jpg', 'description' => 'Цепкий'],
                        ['url' => Yii::$app->request->BaseUrl . '/storage/achieves/3.jpg', 'description' => 'СтарПом'],
                        ['url' => Yii::$app->request->BaseUrl . '/storage/achieves/4.jpg', 'description' => 'Воронье гнездо'],
                        ['url' => Yii::$app->request->BaseUrl . '/storage/achieves/5.jpg', 'description' => 'Держи курс!'],
                    ];
                    ?>
                    <?php foreach ($achieves as $achieve): ?>
                        <img src="<?= $achieve['url'] ?>" alt="" data-toggle="tooltip" title="<?= $achieve['description'] ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="card mt-lg-3">
            <div class="card-header">Мои задачи</div>
            <div class="card-body shadow">
                <div class="row">

                    <?php
                    $tasks = \app\models\UsersTasks::find()
                        ->with('task')
                        ->where(['user_id' => Yii::$app->user->getId()])
                        ->asArray()
                        ->all();

                    $group = [
                        'current' => [],
                        'next' => [],
                        'closed' => []
                    ];

                    foreach ($tasks as $task) {
                        if ($task['is_complete']) {
                            $group['closed'][] = $task['task'];
                        } else if ($task['deadline'] == date('Y-m-d', time()) || strtotime($task['deadline']) <= time()) {
                            $group['current'][] = $task['task'];
                        } else {
                            $group['next'][] = $task['task'];
                        }
                    }
                    ?>

                    <div class="col-lg-4">
                        <h2 class="alert-success">Ближайшие (<?= count($group['current']) ?>)</h2>
                        <ul class="list-group">
                            <?php foreach ($group['current'] as $task): ?>
                                <li class="list-group-item"><?= $task['name']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="alert-info">В очереди (<?= count($group['next']) ?>)</h2>
                        <ul class="list-group">
                            <?php foreach ($group['next'] as $task): ?>
                                <li class="list-group-item"><?= $task['name']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="alert-dark">Завершено (<?= count($group['closed']) ?>)</h2>
                        <ul class="list-group">
                            <?php foreach ($group['closed'] as $task): ?>
                                <li class="list-group-item"><?= $task['name']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <a class="mt-lg-5 btn btn-success w-100" href="/site/study">Погружаемся!</a>
            </div>
        </div>

        <div class="card mt-lg-3">
            <div class="card-header">Новости</div>
            <div class="card-body shadow">
                <div id="profile_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="<?= Yii::$app->request->BaseUrl . '/storage/slides/1.jpg' ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="<?= Yii::$app->request->BaseUrl . '/storage/slides/2.jpg' ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="<?= Yii::$app->request->BaseUrl . '/storage/slides/3.jpg' ?>" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#profile_slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#profile_slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    h2 {
        padding: 0 10px;
    }

    .team > div:not(:nth-child(1)) {
        margin-top: 10px;
    }

    .carousel-item > img {
        height: 400px;
        margin: 0 auto;
    }

    .list-group > li:not(:nth-child(1)) {
        margin-top: 5px;
    }

    .rank-avatar-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .rank_avatar {
        width: 75px;
        height: 75px;
        border-radius: 50px;
    }

    .rank_disabled {
        opacity: .25;
    }

    .experience {
        width: 100%;
        background-color: #ddd;
    }

    .experience-full {
        height: 100%;
        text-align: right;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        color: white;
        background-color: #28a745;
    }

    .achieves {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .achieves > img {
        width: 75px;
        height: 75px;
        border-radius: 75px;
        margin: 5px;
    }
</style>