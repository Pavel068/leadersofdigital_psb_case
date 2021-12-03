<?php

$this->title = 'Обучение';
$this->params['breadcrumbs'][] = $this->title;

?>

<h3><?= $quiz['name']; ?></h3>
<h6 class="text-muted"><?= $quiz['description']; ?></h6>

<div class="site-study">
    <?php foreach ($quiz['quiz']['questions'] as $question): ?>
    <div class="card mt-lg-3">
        <div class="card-body">
            <p class="lead text-justify"><?= $question['question_text'] ?></p>
            <div class="variants">
                <?php foreach ($question['answers'] as $answer):  ?>
                    <button class="btn btn-outline-success"><?= $answer['text']; ?></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<style>
    .variants {
        display: flex;
        flex-direction: column;
    }

    .variants > *:not(:nth-child(1)) {
        margin-top: 5px;
    }
</style>