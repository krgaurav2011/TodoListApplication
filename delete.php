<?php
session_start();
$loginid = $_SESSION['loginid'];
$id= $_GET['id'];
$con = mysqli_connect("localhost","root"," ","todo");
$sql = "DELETE FROM list WHERE id =$id ";

$result = mysqli_query($con,$sql);
if(!$result)
    header('location:userpage.php?notify=Error in Deletion');
else 
   header('location:userpage.php?notify=Successfully Removed');
