<?php
if ($_POST) {

    $validate = Validator::checkData($_POST);

    if (!$validate){
        Flash::createAnswer(false, 'Не все данные были заполнены!');

        header('Location:/');
        exit();
    }

    $result = $queryBuilder->create('notes', $_POST);

    if ($result) { $message = 'Заметка успешно создана!'; } else { $message = 'Ошибка при создании заметки'; }

    Flash::createAnswer($result, $message);

    header("Location:/");

} else {
    include "../view/create.php";
}

