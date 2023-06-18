<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$con = mysqli_connect('localhost','root','','mycomplaints');
		$name = $_POST['name'];
		$age = $_POST['age'];
		$branch = $_POST['branch'];
		$regnno = $_POST['regnno'];
		$complaint = $_POST['complaint'];
		$inc_date = $_POST['inc_date'];
		$category = $_POST['category'];

		$sql = "insert into complaints (Name,Age,Branch,Regn_No,Complaint,Inc_Date,Reg_DateTime,Category) VALUES ('$name','$age','$branch','$regnno','$complaint','$inc_date',now(),'$category')";
		$result = $con->query($sql);
		$con->close();

		$con = mysqli_connect('localhost','root','','mycomplaints');
		$query = "SELECT * from complaints ORDER BY SrNo ASC";
		$res = mysqli_query($con,$query);
		$count = mysqli_num_rows($res);

		if($count>0)
		{
			while($row = mysqli_fetch_array($res))
			{
				$complaintid = $row['SrNo'];
			}
		}
		$message = "Complaint Registered";
		echo "<h2 class='btn btn-lg btn-secondary';>$message. Your Unique ID for registered complaint is $complaintid. Please, NOTE IT DOWN to monitor the status of FIR online. </h2>";

	}
	else {
		echo '<script>
		window.location="registercomplaint.php";
		</script>';
	}

?>
