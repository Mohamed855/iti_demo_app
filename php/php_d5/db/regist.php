<?php

require('dbConnection.php');

$username = strtolower($_POST['username']);
$hashedPass = md5($_POST['password']);

$sqlAllAccoounts = "SELECT username FROM accounts";

$allAccounts = mysqli_query($conn, $sqlAllAccoounts);
$accounts = [];

foreach ($allAccounts as $account) {
    array_push($accounts, $account['username']);
}

if (in_array($username, $accounts)) {
    echo "<script>
        alert('Username is already exsist');
        history.back();
    </script>";
    exit();
} else {
    $sql = "INSERT INTO accounts (username, pass) VALUES ('$username', '$hashedPass')";
    $retval = mysqli_query($conn, $sql);

    echo "<script>
        alert('Your account has been created');
        window.location.replace('../login.php');
    </script>";

    if(!$retval) {
        die("Can't create your account: " . mysqli_error($conn));
    }
}

if(!$allAccounts) {
    die('There is an error, please try again later: ' . mysqli_error($conn));
}

mysqli_close($conn);

?>