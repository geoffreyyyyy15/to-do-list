
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
    <h5 class="card-title">To-Do list</h5>
    <h6 class="card-subtitle mb-2 text-muted">CRUD Table</h6>

    <a class="btn btn-primary" href="insert-remove/insert-task.php">Add to List </a>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

    $result = mysqli_query($conn, $query);

   while($row = mysqli_fetch_array($result)){
        $task1 = $row['task'];


        echo  "
        <tr>
        
        <td>$task1</td>
        <td><a href='#' class='btn btn-success'>Edit</a> | <a href='#' class='btn btn-danger'>Remove</a></td>
        
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

