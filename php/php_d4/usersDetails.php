<?php

include("db/dbConnection.php");

$sql = "SELECT * FROM users";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/5fe40b1bd7.js" crossorigin="anonymous"></script>

    <title>Users Details</title>
</head>

<body>

    <div style="width:700px; margin: 50px auto;">

        <h2 style="display:inline-block;">Users Details</h2>
        <form action="../solution.php" method="post" style="float: right;"><input type="submit" class="btn btn-success"
                value="Add New User" name="addNewUser"></form>
        <hr>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Mail Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<tr>
                                <th scope='row'>{$row['id']}</th>
                                <td style='max-width: 100px; overflow: hidden; text-overflow: ellipsis;'>{$row['username']}</td>
                                <td style='max-width: 200px; overflow: hidden; text-overflow: ellipsis;'>{$row['email']}</td>
                                <td>{$row['gender']}</td>
                                <td>{$row['mailStatus']}</td>
                                <td>
                                    <a href='viewRecord.php?id={$row['id']}'><i class='far fa-eye' style='color: #1052cd;'></i></a>&nbsp;&nbsp;
                                    <a href='editUserDetails.php?id={$row['id']}'><i class='fas fa-pen' style='color: #1052cd;'></i></a>&nbsp;&nbsp;
                                    <a href='db/deleteFromDB.php?id={$row['id']}''><i class='fas fa-trash-alt' style='color:#f70000'></a></i>
                                </td>
                            </tr>";
                        }
                    }

                ?>
            </tbody>
        </table>

    </div>
</body>

</html>