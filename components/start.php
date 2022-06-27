<?php
session_start();
$config = include "../config.php";
include "ConnectDB.php";
include "QueryBuilder.php";
include "Flash.php";

return new QueryBuilder(ConnectDB::connect($config['database']));
