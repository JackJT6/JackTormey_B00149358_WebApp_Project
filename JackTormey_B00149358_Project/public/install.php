<?php

require_once ('config.php');
try {
 $connection = new PDO("mysql:host=$host", $username, $password,
$options);
 $sql = file_get_contents("data/init1.sql");
 $connection->exec($sql);
 echo "Database and table jersey created successfully.";
} catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
} 