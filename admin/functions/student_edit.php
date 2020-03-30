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
	//echo $id ;
	$query = "select * from student_info where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
		$stay_from = $res['stay_from'];
		$name = $res['name'];
		$gender = $res['gender'];
		$contact = $res['contact'];
		$email = $res['email'];
		$gname = $res['gname'];
		$gcontact = $res['gcontact'];
	}
?>

	<input type="number" id="id" name="id" hidden value="<?php echo $id;?>"/>
	<input type="data" id="stay_from" name="stay_from" value="<?php echo $stay_from;?>"/>
	<input type="text" id="name" name="name" value="<?php echo $name;?>"/>
	<input type="text" id="gender" name="gender" value="<?php echo $gender;?>"/>
	<input type="number" id="contact" name="contact" value="<?php echo $contact;?>"/>
	<input type="text" id="email" name="email" value="<?php echo $email;?>"/>
	<input type="text" id="gname" name="gname" value="<?php echo $gname;?>"/>
	<input type="number" id="gcontact" name="gcontact" value="<?php echo $gcontact;?>"/>
	<input type="button" id="update" name="update" value="Update"/>
	
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#update').click(function(){
			
			var id = $('#id').val();
			var stay_from = $('#stay_from').val();
			var name = $('#name').val();
			var gender = $('#gender').val();
			var contact = $('#contact').val();
			var email = $('#email').val();
			var gname = $('#gname').val();
			var gcontact = $('#gcontact').val();
		
			$.ajax({
				url:"student_editaction.php",
				type:"POST",
				data: {id:id,stay_from:stay_from,name:name,gender:gender,contact:contact,email:email,gname:gname,gcontact:gcontact},
				success: function(response){
					
				
						$('#id').val('');
						$('#stay_from').val('');
						$('#name').val('');
						$('#gender').val('');
						$('#contact').val('');
						$('#email').val('');
						$('#gname').val('');
						$('#gcontact').val('');
						$('#data-edit').slideUp();
						$.get('student_view.php',function(response){
							$('#show').html(response);
						})
					
					
				}
			})
		})
		
		
		
	})
</script>