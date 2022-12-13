<html>
    <head>
        <title>Form</title>
    </head>
    <body style="padding:50px">
        <div >
            <form method="post" action="my1.php">
                <fieldset>
                    <legend>Registration</legend>
                    Username:<input type="text" name="user"/><br>
                    Password:<input type="password" name="pass"/><br>
                    <input type="submit" value="register" name="but1"/>
                </fieldset>
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['but1']))
    {
        $usern = $_POST['user'];
        $passn=$_POST['pass'];
        echo "Welcome ".$usern."<br>";
        echo "Your password: ".$passn;
    }
?>