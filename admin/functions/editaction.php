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
		$seater = $_POST['seater'];
		$room_no = $_POST['room_no'];
		$fee = $_POST['fee'];
		
		$result = $crud->execute("Update rooms SET seater='$seater',room_no='$room_no',fee='$fee' where id=$id");
		
		if($result){
			echo 'success';
		}else{
			echo "problem";
		}
		
	
	
	
?>