<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/core/settings.php";

$connect = new PDO("mysql:host=".$host.";dbname=".$database, $user , $pass);