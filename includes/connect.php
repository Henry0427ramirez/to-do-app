<?php
// why is this important? why is localhost so important?
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
//mysquil->connect_error then we want it to die and have this message
if ($mysqli->connect_error) {
	die('connect Error (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
else {
	echo "Connection made";
}
$mysqli->close();

?>