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

$query = "CALL 'searchStudent'();'";

$stmt =$conn->prepare($sql)
$stmt->execute($query);
$student =$stmt->fetchAll(PDO::FRTCH_ASSOC);
print_r($student);exit
?>