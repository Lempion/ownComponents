<?php
$note = $queryBuilder->getOne('notes', $_SESSION['GET']['id']);
if (!$note){
    Flash::createAnswer(false,"Ошибка данных");

    header('Location:/');
}

if ($_POST) {
    $result = $queryBuilder->edit('notes',$_POST,$note['id']);

    if ($result){ $message = "Данные успешно обновлены!"; }else{ $message = "Ошибка обновления данных"; }

    Flash::createAnswer($result,$message);

    header('Location:/');

} else {
    include "../view/edit.php";
}


?>
