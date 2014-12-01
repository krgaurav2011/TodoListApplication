<html>
<head><title>Welcome </title></head>
<body>
<?php
session_start();
if(isset($_SESSION['loginid'])){
    $loginid = $_SESSION['loginid'];
    $con = mysqli_connect("localhost","root"," ","todo");
    $sql = "SELECT * FROM list WHERE loginid = '$loginid' ";
    $result = mysqli_query($con,$sql);
    $count=0;
        
?>
    <h2>
        Hello <?php echo $loginid . '!!<br> Click here to <a href=logout.php>Logout</a>';?> 
    </h2>
    <h3>
        Your TODO List :
    </h3>
    <?php echo "<font color=red size=4><i>" . $_GET['notify'] ."</i></font><br>"; ?>
    <form method="post" action="insert.php">
        Add a new one : <input type="text" name="add">
        <input type="submit" value="ADD">
    </form>
    <?php
      
    while($row = mysqli_fetch_array($result))
	{
        if($count==0){
            echo "<table border='1'><tr bgcolor=#CC9999><th> task</th><th> action</th></tr>";
            $count++;
        }
        $id = $row['id'];
        echo '<tr><td>' . $row['task'] . '</td><td><a href ="delete.php?id=' . $id. '"><button>Delete</button></a></td></tr>';
    }
}
else 
    echo 'You Are logged out Click here to<a href=index.php>login</a>';
    ?>
</body>
</html>        
