<?php
session_start();
$loginid = $_SESSION['loginid'];
$task= $_POST['add'];
$con = mysqli_connect("localhost","root","1343","todo");
$sql = "INSERT INTO list(loginid,task) VALUES('$loginid','$task')";
$result = mysqli_query($con,$sql);
if(!$result)
    header('location:userpage.php?notify=Error in Insertion');
else 
    header('location:userpage.php?notify=Successfully Added');