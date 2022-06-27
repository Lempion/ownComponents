<?php
$result = $queryBuilder->remove('notes',$_SESSION['GET']['id']);

if ($result){ $message = "Заметка удалена"; }else{ $message = "Ошибка удаления заметки"; }

Flash::createAnswer($result,$message);

header('Location:/');