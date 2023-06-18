<html>
<head>
    	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body >
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $complaint_ID = $_POST['complaint_ID'];

        $con = mysqli_connect('localhost','root','','mycomplaints');

        $sql = "SELECT * from complaints WHERE SrNo='$complaint_ID'";
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
            $row = mysqli_fetch_array($result);
            $srno = $row['SrNo'];
            $name = $row['Name'];
            $age = $row['Age'];
            $branch = $row['Branch'];
            $regn_no = $row['Regn_No'];
            $complaint = $row['Complaint'];
            $inc_date = $row['Inc_Date'];
            $incDT = strtotime($inc_date);
            $reg_datetime = $row['Reg_DateTime'];
            $regDT = strtotime($reg_datetime);
            $status = $row['Status'];
?>
<link rel="stylesheet" href="css/firstat.css">
<div class="card">
 <h1>Complaint ID : <?php echo $row['SrNo']?></h1>
 <p class="title"> Name : <?php echo $row['Name']?></p>
 <p> Age : <?php echo $row['Age']?></p>
 <p> Branch : <?php echo $row['Branch']?></p>
 <p> Registration Number : <?php echo $row['Regn_No']?></p>
 <p> Complaint : <?php echo $row['Complaint']?></p>
 <p> Date of Incidence : <?php echo date("d/m/y",$incDT)?></p>
 <p> Date of Registration : <?php echo date("d/m/y",$regDT)?></p>
 <p> Time of Registration : <?php echo date("g:i A",$regDT)?></p>
 <p> Category : <?php echo $row['Category']?></p>
 <p> Status : <?php echo $row['Status']?></p>

</div>


<?php
        }
        else
        {
            $message = "Your complaint has been rejected or no such complaint exists";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>
            window.location="checkstatus.html";
            </script>';
        }
    }

 ?>
 </html>
</body>
