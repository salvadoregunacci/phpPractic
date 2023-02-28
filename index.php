<?php
require_once "./functions.php";
require_once "./core/connect.php";

$firstname = "Bohdan";
$lastname = "Helder";
$age = 27;

$sql = "INSERT INTO `users` (`first_name`,`last_name`,`age`) VALUES (:f_name, :l_name, :age)";
$query = $connect->prepare($sql);
$query->execute(["f_name" => $firstname, "l_name" => $lastname, "age" => $age]);


