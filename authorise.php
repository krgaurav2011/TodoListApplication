<?php
session_start();
if(isset($_POST['login'])){
	$loginid = $_POST['loginid'];
	$password = $_POST['password'];
	if($loginid && $password){
		$con = mysqli_connect("localhost","root"," ","todo");
        $sql = "SELECT * from users where loginid='$loginid' and password= '$password'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==0)
            header("location:index.php?notify=Incorrect Credentials"); 
        else{
            $row = mysqli_fetch_array($result);
            $_SESSION['loginid'] = $loginid;
            header("location:userpage.php");
        }
    }
    else
        header("location:index.php?notify=All Fields Required");
}
