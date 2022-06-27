<?php
session_start();
$config = include "../config.php";
include "../helpersFunc/functions.php";
include "ConnectDB.php";
include "QueryBuilder.php";
include "Flash.php";
include "Validator.php";

return new QueryBuilder(ConnectDB::connect($config['database']));
