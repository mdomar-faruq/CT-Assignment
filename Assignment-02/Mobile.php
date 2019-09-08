<?php 
include 'Create.php';
include 'Read.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Basic Info</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>

.center {
  margin: auto;
  width: 60%;
  padding: 10px;
  padding-top:40px;

}
.Mcenter {
  margin: auto;
  width: 30%;
  padding: 5px;
  padding-top: 40px;

}
td{
  text-align: left;
}
th{
  text-align: left;
}

</style>
</head>
<body>

<div class="Mcenter">
<form class="form-group" method="POST" action="">
		Model_No:<input class="form-control" type="text" name="Model_no">
			OS:<input class="form-control" type="text" name="Os">
			Processor:<input class="form-control" type="text" name="Processor">
			RAM:<input class="form-control" type="text" name="RAM">
			ROM:<input class="form-control" type="text" name="ROM">
			CAMERA:<input class="form-control" type="text" name="Camera">
			BDTK:<input class="form-control" type="text" name="BDTK"><br>
			<input class="btn btn-success" type="submit" name="submit" value="Save">
			</form>
</div>
<div class="center">

     <table border="1" style="width: 100%" class="text-center">
				<tr>
				<th>Model_No </td>
				<th>OS</td>
				<th>Processor</td>
				<th>RAM </th>
				<th>ROM </th>
				<th>Camera</th>
				<th>BDTK  </th>
				<th>Edit</th>
				</tr>
			<?php
					foreach($result as $value){

				?>
				<tr>
				<td><?php echo $value['Model_no']; ?></td>
				<td> <?php echo $value['OS']; ?></td>
				<td><?php echo $value['Processor']; ?> </td>
				<td><?php echo $value['ram']; ?> </td>
				<td> <?php echo $value['rom'] ;?> </td>
				<td> <?php echo $value['camera']; ?>   </td>
				<td>  <?php echo $value['BDTK']; ?></td>
				<td><a class="btn btn-danger btn-sm" href="Delete.php?delete=<?php echo $value['id']; ?>">Delete</a> || <a class="btn btn-primary btn-sm" href="update.php?id=<?php  echo $value['id']; ?>">update</a></td>
				<tr>

			<?php } ?>

	</table>

</div>
</body>
</html>