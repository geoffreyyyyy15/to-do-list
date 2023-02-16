
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
    
  </tr>
  
 
   
 
    <?php
    include('config.php');
  
    
    class RetrieveInfo {
        public function select($table_name)  
        {  
          $c = "SELECT * FROM " . $table_name;
          return $c;
        }
   
    }
   
  
      
    $retrive = new RetrieveInfo();
    $getId = new RetrieveInfo();

    $query =  $retrive->select("todo");
    $result =  $conn->query($query);

   while($row = mysqli_fetch_array($result)){
        $task1 = $row['task'];
        $id = $row['task_id'];


        echo  "
        <tr>
        
        <td>$task1</td>
        <td><a href='insert-remove/edit-task.php?taskId=$id&task=$task1' class='btn btn-success'>Edit</a> | <a href='insert-remove/remove-task.php?id=$id' class='btn btn-danger'>Remove</a></td>
        
        </tr>
        ";
   }



    


    

    ?>
 </tr>
</table>
  </div>

</div>

</div></center>
</body>
</html>

