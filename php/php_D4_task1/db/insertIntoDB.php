<?php

include('dbConnection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'] == "male"? "Male" : "Female";
$mailStatus = isset($_POST['mailStatus'])? "Yes" : "No";

$checkEmailSql = "SELECT email FROM users";

$sql = "INSERT INTO users (username, email, gender, mailStatus) VALUES ('$username', '$email', '$gender', '$mailStatus')";

$retval = mysqli_query($conn, $sql);

if(!$retval ) {
    die('Could not insert to table: ' . mysqli_error($conn));
}

mysqli_close($conn);

echo "<script>
    alert('User data has saved successfully');
    window.location.replace('../usersDetails.php');
</script>";

?>