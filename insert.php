<?php

$db = mysqli_connect("localhost", "root", "","data");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
$password = $_POST['password'];

    	$sql = "INSERT INTO datatable(username,password) VALUES('$username','$password',)";
		mysqli_query($db,$sql);
 
}
?>