<?php
	if(isset($_POST['submit']))
	{
		$srno = $_POST['srno'];
		$stat = $_POST['status'];
		$con = mysqli_connect('localhost','root','','mycomplaints');

	    $query = "UPDATE complaints set Status = '$stat' WHERE SrNo = '$srno'";
	    $result = $con->query($query);
        echo '<script>
		window.location="dash_hostel.php";
		</script>';
	    $con->close();
	}

	else {
		echo "<h2>Error 404</h2>";
	}
?>
