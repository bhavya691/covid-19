<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	<script>
		alert("Connection succesfull")
	</script>
	<?php
}else{
	?>
	<script>
		alert("Connection not succesfull")
	</script>
	<?php
}

?>