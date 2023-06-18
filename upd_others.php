<?php
	if(isset($_POST['submit']))
	{
		$srno = $_POST['srno'];
		$category = $_POST['category'];
		$con = mysqli_connect('localhost','root','','mycomplaints');

	    $query = "UPDATE complaints set Category = '$category' WHERE SrNo = '$srno'";
	    $result = $con->query($query);

	    $con->close();

		echo '<script>
		window.location="dash_others.php";
		</script>';

	}

	else {
		echo "<h2>Error 404</h2>";
	}
?>
