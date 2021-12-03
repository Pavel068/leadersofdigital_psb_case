<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 d-flex flex-row">
                    <img src="<?= Yii::$app->request->BaseUrl . '/storage/avatar-default.png' ?>" alt="Аватар" style="border-radius: 20px; max-height: 200px;">
                    <div style="margin-left: 20px;">
                        <p class="lead">Иванов Иван Неиванович</p>
                        <p><span class="text-uppercase">джун</span> <span class="text-success">1</span>-го уровня</p>
                        <p><span class="text-success">0</span> ПСБоинтов</p>
                        <p class="text-muted">На пути к успеху</p>
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
            <div class="card-body">
                <h1>ТУТ БУДЕТ ШКАЛА ПРОГРЕССА</h1>
            </div>
        </div>

        <div class="card mt-lg-3">
            <div class="card-header">Мои задачи</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="alert-success">В процессе</h2>

                        <ul class="list-group">
                            <li class="list-group-item">Зайти</li>
                            <li class="list-group-item">Поздороваться</li>
                            <li class="list-group-item bg-success"><s>Покурить</s> Поговорить</li>
                            <li class="list-group-item">Попрощаться</li>
                            <li class="list-group-item">Выйти</li>
                        </ul>

                        <p class="mt-2">
                            <button class="btn btn-primary">Перейти</button>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="alert-info">В очереди</h2>

                        <ul class="list-group">
                            <li class="list-group-item">Зайти</li>
                            <li class="list-group-item">Поздороваться</li>
                            <li class="list-group-item"><s>Покурить</s> Поговорить</li>
                            <li class="list-group-item">Попрощаться</li>
                            <li class="list-group-item">Выйти</li>
                        </ul>

                        <p class="mt-2">
                            <button class="btn btn-primary">Перейти</button>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="alert-warning">Завершенные</h2>

                        <ul class="list-group">
                            <li class="list-group-item">Зайти</li>
                            <li class="list-group-item">Поздороваться</li>
                            <li class="list-group-item"><s>Покурить</s> Поговорить</li>
                            <li class="list-group-item">Попрощаться</li>
                            <li class="list-group-item">Выйти</li>
                        </ul>

                        <p class="mt-2">
                            <button class="btn btn-primary">Перейти</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-lg-3">
            <div class="card-header">Новости</div>
            <div class="card-body">
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
</style>