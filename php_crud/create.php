<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>ADD STUDENT</h1>
    <a href="index.php" class="btn btn-info">HOME</a>
    <form method="post">
      <div class="mb-3">
        <label for="for_name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="for_name">
      </div>
      <div class="mb-3">
        <label for="for_age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="for_age">
      </div>
      <div class="mb-3">
        <label for="for_num" class="form-label">Phone number</label>
        <input type="number" name="number" class="form-control" id="for_num">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
<?php
include "connection.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $number = $_POST['number'];

  $qw  = "INSERT INTO `students`(`name`, `age`, `number`) VALUES ('$name','$age','$number')";

  $query = mysqli_query($con, $qw);
}
?>