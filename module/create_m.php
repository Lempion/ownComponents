<?php
if ($_POST) {

    $result = $queryBuilder->create('notes', $_POST);


} else {
    include "../view/create.php";
}

