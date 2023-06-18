<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $con = mysqli_connect('localhost','root','','mycomplaints');

        $sql = "SELECT * from admins WHERE Email='$email' and Password = '$password'";
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
            session_start();
            $row = mysqli_fetch_array($result);
            if($row['Category']=="All")
            {
                    $_SESSION['email'] = $email;
                    $_SESSION['Category'] = "All";
                echo '<script>
                window.location="dash_principal.php";
                </script>';

            }
            else if($row['Category']=="Disciplinary Matters")
            {
                $_SESSION['email'] = $email;
                $_SESSION['Category'] = "Disciplinary Matters";
                echo '<script>
                window.location="dash_disciplinary.php";
                </script>';
            }
            else if($row['Category']=="Sexual Harassment or Misconduct")
            {
                $_SESSION['email'] = $email;
                $_SESSION['Category'] = "Sexual Harassment or Misconduct";
                echo '<script>
                window.location="dash_misconduct.php";
                </script>';
            }
            else if($row['Category']=="Teaching Facilities")
            {
                $_SESSION['email'] = $email;
                $_SESSION['Category'] = "Teaching Facilities";
                echo '<script>
                window.location="dash_teaching.php";
                </script>';
            }
            else if($row['Category']=="Hostel Related")
            {
                $_SESSION['email'] = $email;
                $_SESSION['Category'] = "Hostel Related";
                echo '<script>
                window.location="dash_hostel.php";
                </script>';
            }
            else if($row['Category']=="Others")
            {
                $_SESSION['email'] = $email;
                $_SESSION['Category'] = "Others";
                echo '<script>
                window.location="dash_others.php";
                </script>';
            }
        }
        else
        {
            $message = "Wrong credentials";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>
            window.location="login.html";
            </script>';
        }
    }

 ?>
