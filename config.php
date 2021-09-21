<?php
	$servername = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'spark';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}


	if($conn){
		// echo 'connect successfully';
	
	?>
		<script>
			alert('connection successfull');
		</script>
	
				
	<?php
		}else{
		//echo 'not connected';
		
		die("no connection" . mysqli_connect_error());
		}

?>

<!-- vrk7xcrab1wsx4r1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com -->
