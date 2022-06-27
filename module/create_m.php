<?php
if ($_POST) {

    $result = $queryBuilder->create('notes', $_POST);

    if ($result) { $message = 'Заметка успешно создана!'; } else { $message = 'Ошибка при создании заметки'; }

    Flash::createAnswer($result, $message);

    header("Location:/");

} else {
    include "../view/create.php";
}

