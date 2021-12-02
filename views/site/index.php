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
                    <p class="lead">Проект: <span class="font-weight-bold">PSB Project</span></p>
                    <p>Стек технологий: Node.js, Express, MySQL</p>
                </div>
                <div class="col-lg-4 team">
                    <p class="lead">Команда: <span class="font-weight-bold">Dream Team #11</span></p>
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

    <div class="body-content mt-lg-5">

        <div class="row">
            <div class="col-lg-4">
                <h2 class="alert-success">В процессе</h2>

                <ul class="list-group">
                    <li class="list-group-item">Зайти</li>
                    <li class="list-group-item">Поздороваться</li>
                    <li class="list-group-item active">Покурить</li>
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
                    <li class="list-group-item">Покурить</li>
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
                    <li class="list-group-item">Покурить</li>
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

<style>
    h2 {
        padding: 0 10px;
    }

    .team > div:not(:nth-child(1)) {
        margin-top: 10px;
    }
</style>