<?php
    session_start();
    $loginid = $_POST['loginid'];
    $password = $_POST['password'];
    $con = mysqli_connect("localhost","root","1343","todo");
    $sqlcheck = "select * from users where loginid='$loginid'";
    $resultcheck = mysqli_query($con,$sqlcheck);
    if(mysqli_num_rows($resultcheck) == 0){
        $sql = "INSERT INTO users(loginid,password) VALUES('$loginid','$password')";
        $result = mysqli_query($con,$sql);
        if(!$result)
                echo "<font color=red>Error in Insertion</font>";
        else{
            $_SESSION['loginid']= $loginid;
            header('location:userpage.php');
        }
    }
        else
           header('location:register.php?notify= User Already Exists!! Try another One');
