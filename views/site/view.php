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
                    <input type="radio" id="<?= $answer['id']; ?>" name="<?= $question['id']; ?>" value="<?= $answer['id']; ?>">
                    <label class="btn btn-outline-success" for="<?= $answer['id']; ?>"><?= $answer['text']; ?></label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <button class="mt-5 btn btn-primary">Отправить</button>
</div>

<style>
    .variants {
        display: flex;
        flex-direction: column;
    }

    .variants > *:not(:nth-child(1)) {
        margin-top: 5px;
    }

    .variants input[type='radio'] {
        display: none;
    }

    .variants input[type='radio']:checked + label {
        background-color: #28a745;
        color: #ffffff;
        font-weight: bold;
    }
</style>