<?php 
$pdo = new PDO("mysql:host=localhost;dbname=my_data", "root", "");

if(isset($_POST['submit'])){
	$Model=$_POST['Model_no'];
	$Os=$_POST['Os'];
	$Processor=$_POST['Processor'];
	$RAM = $_POST['RAM'];
	$ROM= $_POST['ROM'];
	$Camera =$_POST['Camera'];
	$BDTK =$_POST['BDTK'];
	

	
	$q = "INSERT INTO mobile(Model_no,OS,Processor,RAM,ROM,Camera,BDTK) VALUES('$Model','$Os','$Processor','$RAM','$ROM','$Camera','$BDTK')";
	$statement = $pdo->prepare($q);
	$statement->execute();
	
}

 ?>