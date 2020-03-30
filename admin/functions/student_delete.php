<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:../../login.php');
}
?>

<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_POST['id'];
	
	if($crud->delete($id,"student_info")){
		echo 'success';
	}
	else{
		echo "problem";
	}


?>