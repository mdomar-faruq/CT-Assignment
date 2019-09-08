<?php

$get_data_sql = "SELECT * FROM mobile";
$get_statement = $pdo->prepare($get_data_sql);
$get_statement->execute();
$result = $get_statement->fetchAll();

?>