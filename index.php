<html>
<head><title>Login Page </title></head>
<body bgcolor=#E6E6E6>
    <div>
        <?php
            session_start();
            echo "<font color=red size=4><i>" . $_GET['notify'] ."</i></font><br>";
        ?>
        
        <font color=red align=center size=5>
        <font color= "red" size =5><b> Enter Your Login Details</b></font><hr>
        <form action = "authorise.php" method ="post">
            <table>
                <tr>
                    <td>LoginID :</td> 
                    <td><input type="text" name="loginid"></td>
                </tr>
                <tr>
                     <td> Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type = submit value="LOGIN" name="login"></td>
                </tr>
            </table>
        </form>
        <br>
        <font color = #003300 size=6> New Users!! <a href="register.php">CREATE NEW ACCOUNT HERE</a> </font>
    </div>
</body>
</html>