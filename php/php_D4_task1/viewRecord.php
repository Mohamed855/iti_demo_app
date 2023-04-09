<?php

    include("db/dbConnection.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if (! $result) {
        die("couldn't get data: " . mysqli_error($conn));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--BootStrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View Record</title>
</head>
<body>

    <?php
    
    while ($row = mysqli_fetch_assoc($result)):

    ?>
    <div style="width: 600px; margin: 50px auto;">
        <h2><?php echo $row['username'] . "'s Profile";?></h2>
        <hr>
        <h5>User Name</h5>
        <p><?php echo $row['username']; ?></p>
        <h5>Email</h5>
        <p><?php echo $row['email']; ?></p>
        <h5>Gender</h5>
        <p><?php echo $row['gender']; ?></p>
        <p><?php echo $row['mailStatus'] == "Yes"? $row["username"] . ' is recieving e-mails from us': $row["username"] . ' is not recieving any e-mails from us';?></p>
        <?php endwhile;?>
        <button class="btn btn-primary" onclick="history.back()">Back</button>
    </div>
</body>
</html>