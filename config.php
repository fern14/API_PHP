<?php
$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = "root";
$db_pass = "root";

try {
  $pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);
} catch (PDOException $e) {
  echo "ERROR: ".$e->getMessage();
}

$array = [
  'error' => '',
  'result' => []
];