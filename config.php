<?php

$db_user = "sql11484746";
$db_pass = "XGSIetdVMg";
$db_name = "users";

$db = new PDO('mysql:host=sql11.freesqldatabase.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
