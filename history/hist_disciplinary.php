<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Login/css/firstat.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Complaints history</title>

	<style type="text/css">
		.complaintscontainer{
			margin-left: 10vw;
			margin-right: 10vw;
			margin-top: 5vh;
		}
		body{
			background-color: #ebebeb;
		}
        .btn{
            margin-top: 6px;
        }
	</style>
</head>
	<nav class="navbar navbar-dark bg-dark">
		<div style="float:left; color:#fff; margin-left:10vw;">
           <a class="navbar-brand">
             CCET
           </a>
       	</div>
       <div style="float:right; color:#fff; margin-right:10vw;">
           <a href="logout.php" style="text-decoration: none; color:#fff;">Log Out</a>
       </div>
     </nav>
	<div class="complaintscontainer">
        <div><h1>Complaint History</h1></div><br>
		<table class="table table-hover table-light">
		<thead class="thead">
		    <tr>
		      <th scope="col">S.No.</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
		      <th scope="col">Branch</th>
		      <th scope="col">Registration No.</th>
		      <th scope="col">Complaint</th>
		      <th scope="col">Date of Incidence</th>
		      <th scope="col">Date of Registration</th>
		      <th scope="col">Category</th>
		      <th scope="col">Status</th>
		    </tr>
		</thead> 
		<tbody>
		    <?php
            session_start();
            if(isset($_SESSION['email'])){
            }
            else{
                echo '<script>
                window.location="test.html";
                </script>';
            }
		    $i =1;
		    $con = mysqli_connect('localhost','root','','mycomplaints');
		    $query = "SELECT * from complaints WHERE (Status = 'Rejected' || Status = 'Solved') && Category = 'Disciplinary Matters' ORDER BY Reg_DateTime DESC";
		    $res = mysqli_query($con,$query);
		    $count = mysqli_num_rows($res);
		    if($count>0)
		    {
		    	while($row = mysqli_fetch_array($res))
		    	{
					?>
					<tr>
				    <th scope="row"><?php echo $i ?></th>
				    <td><?php echo $row['Name'] ?></td>
				    <td><?php echo $row['Age'] ?></td>
				    <td><?php echo $row['Branch'] ?></td>
				    <td><?php echo $row['Regn_No'] ?></td>
				    <td><?php echo $row['Complaint'] ?></td>
				    <td><?php echo $row['Inc_Date'] ?></td>
				    <td><?php echo $row['Reg_DateTime'] ?></td>
				    <td><?php echo $row['Category'] ?></td>
				    <td><?php echo $row['Status'] ?></td>
				    </tr>
					<?php
					$i++;
				}
		    }
		    else
		    {
		    	echo "<h2>No complaints!</h2>";
		    }

		    $con->close();

		    ?>


		  </tbody>
		</table>
	</div>
	</body>
</html>
