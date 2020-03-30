$(document).ready(function(){
	
	$('#add-form').hide();
	$.get('view.php',function(data){
		$('#data-show').html(data);
	})
	

})