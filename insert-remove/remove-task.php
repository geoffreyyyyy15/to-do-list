<?php
include('../config.php');
$id = $_GET['id'];
class RemoveTask {
        public function deleteTask($tablename, $columname, $id2) {
            $remove = "DELETE FROM " . $tablename . " WHERE " . $columname . " = ". $id2;
            return $remove;
        }
      }

$remove_task = new RemoveTask();
$query = $remove_task->deleteTask("todo", "task_id", $id);
mysqli_query($conn, $query);
header("Location: ../todo.php");