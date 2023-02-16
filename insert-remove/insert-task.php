
<?php
include("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>To-do list</title>
    <link rel="icon" type="image/x-icon" href="../Resources/socialites.ico">
    <link href="style.css?v=7" rel="stylesheet">
</head>
<body>
    <style>
        .container {
            margin: 50px;
            align-items: center;
            justify-content: center;
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
<center><div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Insert Task</h5>

    <p class="card-text">Insert new Task to the list.</p>
 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="input-group mb-3">

  <input type="text" class="form-control" placeholder="Input Task" aria-label="Username" aria-describedby="basic-addon1" name="task">
  <input type="submit" class="btn btn-primary" value="Add" name="add">
  </form>
</div>
     
  </div>

</div>
<?php

class AddList {
  public function insert($tablename, $task) {
      $insert = "INSERT INTO " .$tablename ." (task) VALUES ('$task')";
      return $insert;
  }
}

if(isset($_POST['add'])) {
    $task = $_POST['task'];
    $addList = new AddList();
    $query = $addList->insert("todo", $task);
    $insertTask = mysqli_query($conn, $query);
}






?>

</div></center>
</body>
</html>

