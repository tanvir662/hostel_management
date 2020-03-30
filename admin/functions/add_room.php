<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:../../login.php');
}
?>

<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$seater = $_POST['seater'];
		$rmno = $_POST['rmno'];
		$fee = $_POST['fee'];
		echo $seater.$rmno.$fee;
		
		$result = $crud->execute("INSERT into rooms(seater,room_no,fee) VALUES('$seater','$rmno','$fee')");
		
		if($result){
			echo 'success';
		}else{
			echo "Error";
		}
		

	
	
?>