<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:../../login.php');
}
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from rooms";

$result = $crud->getData($query);
if($result){
?>


<table border="1" class="display table table-striped table-bordered table-hover">

	<tr>
		<td> seater </td>
		<td> Room No </td>
		<td> fee </td>
		<td> Action </td>
	</tr>
	<?php
	 foreach($result as $key=>$res){
		 echo "<tr>";
		 echo "<td>".$res['seater']."</td>";
		 echo "<td>".$res['room_no']."</td>";
		 echo "<td>".$res['fee']."</td>";
		 echo "<td><button id=".$res['id']." class='s_edit'>Edit</button> | 
		 <button id=".$res['id']." class='s_delete'>Delete</button> </td>";
		 echo "</tr>";
	 }
	 echo '</table>';
}else{
	echo 'No data Found! Please Add New Data.';
}
	 ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.s_edit').click(function(){
			$('#data-edit').slideDown();
			
			var id = $(this).attr('id');

			
			$.ajax({
			
				url:'edit.php',
				type:'POST',
				data:{id:id},
				success:function(response){
					$('#data-edit').html(response);
				}
			})
		})
		$('.s_delete').click(function(){
			
			
			var id = $(this).attr('id');
			
			
			
			$.ajax({
				url:"delete.php",
				type:"POST",
				data:{id:id},
				success:function(response){

					
					
					

						$.get('view.php',function(response){
							$('#show').html(response);
						})
					
				}
			})
		})
	})
	
</script>
