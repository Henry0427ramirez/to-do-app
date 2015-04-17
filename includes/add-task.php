<?php 
  $task = strip_tags($POST['tasks']);
  $date = date('Y-m-d');
  $time = date('H:i:s');

  include('connect.php');

  $mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
  $mysqli ->query("INSERT INTO tasks VALUES ('','$task', 'date', 'time')");
  //puts the data in our database

  $query = "SELECT * FROM tasks WHERE tasks='$tasks' and date='$date' and time='$time' ";  

?>