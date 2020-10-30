<?php 
require 'connection.php';

if(isset($_POST['submit'])){

$id = $_POST['id'];


$select = "SELECT * FROM model WHERE id = $id LIMIT 1";
$result = mysqli_query($connect, $select);

if(mysqli_num_rows($result) > 0){

	$delete = "DELETE FROM model WHERE id = $id";

	mysqli_query($connect, $delete) or die('Failed to DELETE');
	echo "Student with $id was Delete SUCCESSFULLY";
}else {
	echo "There's no record of Student with this $id";
}


}

?>
