
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

    </style>
<center><div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">To-Do list</h5>
    <h6 class="card-subtitle mb-2 text-muted">CRUD Table</h6>

    <a class="btn btn-primary" href="">Add to List </a>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  

    <?php
    include('config.php');
    class AddList {
        public $task;
        public $task_id;
        protected $table_name;

        function setTask($table_name, $task_id, $task) {
            $this->task = $task;
            $this->task_id = $task_id;
            $this->table_name = $table_name;
            
        }
        function getTask() {
            return "INSERT INTO " . $this->table_name . "VALUES (" . $this->task . ")";
        }
        function getId($task_id) {
            $this->task_id = $task_id;
            return $this->task_id;
        }
    }
    
    class RetrieveInfo extends AddList {

        public function retrieve($table_name, $column_name, $param) {
            $query = "SELECT * FROM $table_name WHERE $column_name = $param";
        }
    }


    $retrive = new RetrieveInfo();
    $getId = new RetrieveInfo();

    


    

    ?>

<p> <?php echo $user;  ?> </p>
  </div>

</div>

</div></center>
</body>
</html>

