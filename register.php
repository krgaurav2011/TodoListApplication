<html>
<head><title>Register Page </title></head>
<body bgcolor=#E6E6E6>
    <div>
        <?php
            session_start();
            echo "<font color=red size=4><i>" . $_GET['notify'] ."</i></font><br>";
        ?>
        <font color=red align=center size=5>
        <font color= "red" size =5><b> Register Here</b></font><hr>
        <form action = "register_submit.php" method ="post">
            <table>
                <tr>
                    <td>LoginID :</td> 
                    <td><input type="text" name="loginid"></td>
                </tr>
                <tr>
                    <td> Password :</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type = submit value="REGISTER"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>