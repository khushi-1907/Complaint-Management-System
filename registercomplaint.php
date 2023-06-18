<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register your complaint</title>
    <style type="text/css">
        .registerform{
            margin-top: 28px;
            width:50vw;
            max-width: 90vw;
        }
        .form-group{
            margin: 20px;
        }
        label{
            font-size: 20px;
        }
    </style>
  </head>
  <body>
    <center>
    <div class="card registerform">
        <form action="storecomplaint.php" method="POST">
          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter Name" name="name">
          </div>
          <div class="form-group">
            <label for="inputAge">Age</label>
            <input type="number" class="form-control" id="inputAge" placeholder="Enter Age" name="age">
          </div>
          <div class="form-group">
            <label for="inputBranch">Branch</label>
            <input type="text" class="form-control" id="inputBranch" placeholder="Enter Branch" name="branch">
          </div>
          <div class="form-group">
            <label for="inputRegn">Registration Number</label>
            <input type="number" class="form-control" id="inputRegn" placeholder="Enter your Registration Number" name="regnno">
          </div>
          <div class="form-group">
            <label for="inputComplaint">Description of the complaint</label>
            <textarea class="form-control" id="inputComplaint" rows="3" placeholder="Tell about your complaint" name="complaint"></textarea>
          </div>
          <div class="form-group">
            <label for="inputDate">Date of Incidence</label>
            <input type="date" class="form-control" id="inputDate" placeholder="Enter Age" name="inc_date">
          </div>
          <div class="form-group">
            <label for="inputCategory">Select Complaint Type</label>
            <select class="form-control" id="inputCategory" name="category">
              <option>Disciplinary Matters</option>
              <option>Sexual Harassment or Misconduct</option>
              <option>Teaching Facilities</option>
              <option>Hostel Related</option>
              <option>Others</option>
            </select>
          </div>
          <button type="submit" class="btn btn-lg btn-secondary" style="background-color:black">Submit</button>
        </form>
    </div>
    </center>
  </body>
</html>
