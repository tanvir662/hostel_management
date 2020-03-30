
<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:../../login.php');
}
?>

<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$stay_from = $_POST['stay_from'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$gname = $_POST['gname'];
		$gcontact = $_POST['gcontact'];
		

		
		$result = $crud->execute("INSERT into student_info(stay_from,name,gender,contact,email,gname,gcontact) VALUES('$stay_from','$name','$gender','$contact','$email','$gname','$gcontact')");
		
		if($result){
			echo 'success';
		}else{
			echo "Error";
		}
		

	
	
?>