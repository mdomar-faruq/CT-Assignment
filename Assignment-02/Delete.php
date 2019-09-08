<?php

$pdo = new PDO("mysql:host=localhost;dbname=my_data", "root", "");

if(isset($_GET['delete'])){
	$id = $_GET['delete'];


	$del_q = "DELETE FROM mobile WHERE id='$id'";
	$del_st = $pdo->prepare($del_q);
	$del_st->execute(); 
	header("location:index.php?delSuccc=1");
}

?>