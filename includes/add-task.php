<?php 
  $task = strip_tags($POST['tasks']);
  $date = date('Y-m-d');
  $time = date('H:i:s');

  include('connect.php');

  $mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
  $mysqli ->query("INSERT INTO tasks VALUES ('','$task', 'date', 'time')");
  //puts the data in our database

  $query = "SELECT * FROM tasks WHERE tasks='$tasks' and date='$date' and time='$time' ";  \

  //taking the result of the query
  if($result = $mysqli->query($query)) {
    while ($row = $reslut->fetch_assoc()) {
      $task_id = $row['id'];
      $task_name = $row['task'];
    }
  }

  $mysqli->close();

  echo '<li><span>'.$task_name.'</span><img id="'.$task_id. '" class="delete-button" width="10px" src="image.close.svg" /></li>';
?>