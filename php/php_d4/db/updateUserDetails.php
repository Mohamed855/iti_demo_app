<?php

include('dbConnection.php');

if (isset($_POST['saveEditedDetails'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'] == "male"? "Male" : "Female";
    $mailStatus = isset($_POST['mailStatus'])? "Yes" : "No";

    $id = $_GET['id'];
    $sql = "UPDATE users SET username = '$username', email = '$email', gender = '$gender', mailStatus = '$mailStatus' WHERE  id = $id";

    $retval = mysqli_query($conn, $sql);

    if(!$retval ) {
        die('Could not insert to table: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
}

echo "<script>
    alert('User data has saved successfully');
    history.back();
</script>";

?>