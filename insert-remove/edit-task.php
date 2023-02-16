
<?php
include("../config.php");
$taskG = $_GET['task'];
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
<center><div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Edit Task</h5>

    <p class="card-text">Update your current task in the list.</p>
 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="input-group mb-3">

  <input type="text" class="form-control" placeholder="Edit Task" aria-label="Username" aria-describedby="basic-addon1" name="task" value="<?php echo $taskG; ?>">

  
  <div class="input-group mb-3">
  <input type="submit" class="btn btn-primary" value="Update" name="edit">
  <a href="../todo.php" class="btn btn-warning">Back</a>
  </div>
  </form>
</div>
     
  </div>

</div></div></center>
<?php
$task_id = $_GET['taskId'];

class EditTask {
  public function updateTask($tablename, $task_name, $task, $task_id_column, $task_id) {
      $updateTask = "UPDATE {$tablename} SET {$task_name} = '{$task}' WHERE {$task_id_column} = {$task_id}";
      return $updateTask;
  }
}

if(isset($_POST['edit'])) {
    $task = $_POST['task'];
    $editTask = new EditTask();
    $updateTask = $editTask->updateTask("todo", "task",  $task, "task_id", $task_id);
    $conn->query($updateTask);
    header("Location: ../todo.php");
}






?>


</body>
</html>

