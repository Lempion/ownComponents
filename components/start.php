<?php
$config = include "../config.php";
include "ConnectDB.php";
include "QueryBuilder.php";

return new QueryBuilder(ConnectDB::connect($config['database']));
