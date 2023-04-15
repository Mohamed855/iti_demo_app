<?php

session_start();

require('dbConnection.php');

if(isset($_POST['loginUserForm'])) {
    $UName = strtolower($_POST["username"]);
    $Upass = $_POST["password"];

    $sql = "SELECT * FROM accounts WHERE username = '$UName'";

    $exsistAcc = mysqli_query($conn, $sql);

    if($row=mysqli_fetch_assoc($exsistAcc))
    {
        // get pass from database

        $db_password = $row['pass'];

        // compare entered pass with db pass

        if(md5($Upass) == $db_password)
        {
            $_SESSION['activeuser'] = $UName;

            echo "<script>
                alert('Welcome back ".ucfirst($UName)."');
                window.location.replace('../home.php');
            </script>";
        } else {
            echo "<script>
                alert('Invalid password');
                history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Invalid Username');
            history.back();
        </script>";
    }
}

mysqli_close($conn);

?>
