<?php

include('db/dbConnection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BootStrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Registeration Form</title>
</head>

<body>

    <form id="userForm" action="db/insertIntoDB.php" method="post" style="width:600px; margin:50px auto;">
        <h2>User Registeration Form</h2>
        <hr>
        <p>Please fill this form and submit to add user record to the database</p>
        <div class="mb-3">
            <label for="username" class="form-label">Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="user name" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" maxlength="50" required>
        </div>
        <label for="gender" class="form-label">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1" style="cursor:pointer;" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault2" style="cursor:pointer;">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="mailStatus" value="mailStatus" id="flexCheckDefault" style="cursor:pointer;">
            <label class="form-check-label" for="flexCheckDefault">
                Recieve E-mails from us
            </label>
        </div>
        <br>
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Submit" name="submitUserForm">
            <button type="button" class="btn" onclick="redirectToUsersDetails()">Users Details</button>
        </div>
    </form>

    <script>
        function redirectToUsersDetails() {
            window.location.href = "usersDetails.php";
        }
    </script>

</body>

</html>