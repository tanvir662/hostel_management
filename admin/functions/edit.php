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
	$query = "select * from rooms where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
		$seater = $res['seater'];
		$room_no = $res['room_no'];
		$fee = $res['fee'];
	}
?>

	<input type="number" id="id" name="id" hidden value="<?php echo $id;?>"/>
	<input type="text" id="seater" name="seater" value="<?php echo $seater;?>"/>
	<input type="number" id="room_no" name="room_no" value="<?php echo $room_no;?>"/>
	<input type="number" id="fee" name="fee" value="<?php echo $fee;?>"/>
	<input type="button" id="update" name="update" value="Update"/>
	
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#update').click(function(){
			
			var id = $('#id').val();
			var seater = $('#seater').val();
			var room_no = $('#room_no').val();
			var fee = $('#fee').val();
		
			$.ajax({
				url:"editaction.php",
				type:"POST",
				data: {id:id,seater:seater,room_no:room_no,fee:fee},
				success: function(response){
					
				
						$('#id').val('');
						$('#seater').val('');
						$('#room_no').val('');
						$('#fee').val('');
						$('#data-edit').slideUp();
						$.get('view.php',function(response){
							$('#show').html(response);
						})
					
					
				}
			})
		})
		
		
		
	})
</script>