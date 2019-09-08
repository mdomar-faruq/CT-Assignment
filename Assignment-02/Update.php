<?php
$pdo = new PDO("mysql:host=localhost;dbname=my_data", "root", "");
$up_id = $_GET['id'];

if(isset($_POST['submit'])){
	$Model=$_POST['Model_no'];
	$Os=$_POST['Os'];
	$Processor=$_POST['Processor'];
	$RAM = $_POST['RAM'];
	$ROM= $_POST['ROM'];
	$Camera =$_POST['Camera'];
	$BDTK =$_POST['BDTK'];

	$q = "UPDATE mobile SET Model_no='$Model',OS='$Os',Processor='$Processor',RAM='$RAM',ROM='$ROM',Camera='$Camera',BDTK='$BDTK' WHERE id='$up_id'";
	$statement = $pdo->prepare($q);
	$statement->execute();
	header("location:index.php");
}

 $get_data_sql = "SELECT * FROM mobile WHERE id='$up_id'";
$get_statement = $pdo->prepare($get_data_sql);
$get_statement->execute();
$result = $get_statement->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		
.Mcenter {
  margin: auto;
  width: 30%;
  padding: 5px;
  padding-top: 60px;

}

	</style>
</head>
<body>
	<div class="Mcenter">
	<?php
				foreach($result as $value){
			?>
<form class="form-group" method="POST" action="">
		Model_No:<input class="form-control" type="text" name="Model_no" value="<?php echo $value['Model_no']; ?>"> <br>
			OS:<input class="form-control" type="text" name="Os" value="<?php echo $value['OS']; ?>"><br>
			Processor:<input class="form-control" type="text" name="Processor"value="<?php echo $value['Processor']; ?>"><br>
			RAM:<input class="form-control" type="text" name="RAM"value="<?php echo $value['ram']; ?>"><br>
			ROM:<input class="form-control" type="text" name="ROM"value="<?php echo $value['rom']; ?>"><br>
			CAMERA:<input class="form-control" type="text" name="Camera"value="<?php echo $value['camera']; ?>"><br>
			BDTK:<input class="form-control" type="text" name="BDTK"value="<?php echo $value['BDTK']; ?>"><br>
			<input class="btn btn-success" type="submit" name="submit" value="Save"><br>
			</form>
			<?php
				}
			?>

			</div>
</body>
</html>