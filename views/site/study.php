<?php

/* @var $this yii\web\View */

$this->title = 'Обучение';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-study">

    <?php
    $tasks = \app\models\Tasks::find()->all();
    ?>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Ссылка</th>
            <th></th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task->name ?></td>
                <td>
                    <code class="text-muted" style="width: 250px;">
                        <?= $task->description ?>
                    </code>
                </td>
                <td>
                    <?php if ($task->content_url): ?>
                        <a href="<?= $task->content_url ?>" target="_blank">Материал</a>
                    <?php endif; ?>
                </td>
                <td class="d-flex flex-row">
                    <a href=""><i class="fas fa-arrow-circle-right"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>