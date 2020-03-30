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
		$stay_from = $_POST['stay_from'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$gname = $_POST['gname'];
		$gcontact = $_POST['gcontact'];
		
		$result = $crud->execute("Update student_info SET stay_from='$stay_from',name='$name',gender='$gender',contact='$contact',email='$email',gname='$gname',gcontact='$gcontact' where id=$id");
		
		if($result){
			echo 'success';
		}else{
			echo "problem";
		}
		
	
	
	
?>