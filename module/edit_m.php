<?php
$note = $queryBuilder->getOne('notes', $_SESSION['GET']['id']);

if (!$note) {
    Flash::createAnswer(false, "Ошибка получения данных");

    header('Location:/');
}

if ($_POST) {

    $validate = Validator::checkData($_POST);

    if (!$validate){
        Flash::createAnswer(false, 'Не все данные были заполнены!');

        header('Location:/');
        exit();
    }

    $result = $queryBuilder->edit('notes', $_POST, $note['id']);

    if ($result) {
        $message = "Данные успешно обновлены!";
    } else {
        $message = "Ошибка обновления данных";
    }

    Flash::createAnswer($result, $message);

    header('Location:/');

} else {
    include "../view/edit.php";
}


?>
