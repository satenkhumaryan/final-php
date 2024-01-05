<?php 

include ("admin/connect.php");

if (isset($_POST['add'])) {
	$name=$_POST['name'];
	$info=$_POST['info'];
	$image=$_POST['image'];
	$price=$_POST['price'];

	$sql = "INSERT INTO `products` (`name`,`info`,`image`,`price`) VALUES ('$name','$info','$image','$price')";

	$query = mysqli_query($db,$sql);

	if ($query) {
		header("location: single.php");
	}

}


?>