<?php
    include('config.php');

    // class Task {
    //   protected $connection;
    //   protected $table_name;

    //     public function __construct($connection, $table_name)
    //     {
    //       $this->connection = $connection;
    //       $this->table_name = $table_name;
    //     }

    //     public function all()  
    //     {  
    //       $query = "SELECT * FROM " . $this->table_name;
    //       $result =  $this->connection->query($query);
    //       return mysqli_fetch_array($result);
    //     }
    // }
   
      
    // $tasks = new Task($conn, 'todo');
    // $rows = $tasks->all();

    // // foreach ($rows as $row) {
    // //   var_dump($row);
    // //   echo '<br>';
    // // }
    // var_dump($rows);


    $query = "SELECT * FROM " . 'todo';
    $result1 =  $conn->query($query);
    $result = mysqli_fetch_array($result1);
      var_dump($result);


  //  while($row){
  //       $task1 = $row['task'];
  //       $id = $row['task_id'];


  //       echo  "
  //       <tr>
        
  //       <td>$task1</td>
  //       <td><a href='insert-remove/edit-task.php?taskId=$id&task=$task1' class='btn btn-success'>Edit</a> | <a href='insert-remove/remove-task.php?id=$id' class='btn btn-danger'>Remove</a></td>
        
  //       </tr>
  //       ";
  //  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>To-do list</title>
    <link rel="icon" type="image/x-icon" href="../Resources/socialites.ico">
    <link href="style.css?v=7" rel="stylesheet">
</head>
<body>

<center><div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">To-Do list</h5>
    <h6 class="card-subtitle mb-2 text-muted">CRUD Table</h6>

    <a class="btn btn-primary" href="insert-remove/insert-task.php">Add to List </a>
    <p class="card-text">Add Task to the list</p>
  <table>
  <tr>
    <th>Todo</th>
    <th>Edit / Remove</th>
    

</table>
  </div>

</div>

</div></center>
</body>
</html>

