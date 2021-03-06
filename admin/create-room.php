
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Create Room</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add a Room </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add a Room</div>
									<div class="panel-body">
		
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Select Seater  </label>
												<div class="col-sm-8">
												<Select id="seater" class="form-control" required>
													<option value="">Select Seater</option>
													<option value="1">Single Seater</option>
													<option value="2">Two Seater</option>
													<option value="3">Three Seater</option>
													<option value="4">Four Seater</option>
													<option value="5">Five Seater</option>
												</Select>
													</div>
													</div>
													<div class="form-group">
													<label class="col-sm-2 control-label">Room No.</label>
													<div class="col-sm-8">
													<input type="text" class="form-control" name="rmno" id="rmno" value="" required="required">
													</div>
													</div>
													<div class="form-group">
													<label class="col-sm-2 control-label">Fee(Per Student)</label>
													<div class="col-sm-8">
													<input type="text" class="form-control" name="fee" id="fee" value="" required="required">
													</div>
													</div>

													<div class="col-sm-8 col-sm-offset-2">
													<input class="btn btn-primary" type="button" name="submit" id="submit" value="Create Room ">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
<script type="text/javascript">
	$(document).ready(function(){
	
	
	
	
	$('#submit').click(function(){

		
		var seater = $('#seater').val();
		var rmno = $('#rmno').val();
		var fee = $('#fee').val();
		
		$.ajax({
			url:'add_room.php',
			type:'POST',
			data:{seater:seater,rmno:rmno,fee:fee},
			success: function(response){
				alert(response);
				if(response == 'success'){
					
				}
			}
		})
	})
	
})
</script>
</body>

</html>