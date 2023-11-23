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
    <h1>STUDENTS LIST</h1>
    <a href="create.php" class="btn btn-primary">ADD STUDENT</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">AGE</th>
      <th scope="col">PHONE NUMBER</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $sql = "SELECT * FROM STUDENTS";
    $result = $con->query($sql);
    if(!$result){
        die("ERROR!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    

    <tr>
      <th scope='row'>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[age]</td>
      <td>$row[number]</td>
      <td>
      <a class='btn btn-warning'>EDIT</a>
      <a class='btn btn-danger'>DELETE</a>
      </td>
    </tr> ";
    }
    ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>