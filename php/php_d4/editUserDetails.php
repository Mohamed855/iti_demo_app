<?php

include('db/dbConnection.php');

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

    <title>User Registeration Form</title>
</head>

<body>

    <?php 

        while ($row = mysqli_fetch_assoc($result)) {

    ?>
    <form id="userForm" action="db/updateUserDetails.php?id=<?php echo $row['id'];?>" method="post" style="width:600px; margin:50px auto;">
        <h2><?php echo $row['username'] . "'s Details";?></h2>
        <hr>
        <div class="mb-3">
            <label for="username" class="form-label">Name</label>
            <input type="text" class="form-control" id="username" name="username" 
            value="<?php echo $row['username'];?>" 
            placeholder="user name" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" 
            value="<?php echo $row['email'];?>" 
            placeholder="name@example.com" maxlength="50" required>
        </div>
        <label for="gender" class="form-label">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1" style="cursor:pointer;" 
            <?php echo $row['gender'] == 'Female'? 'checked':'';?>>
            <label class="form-check-label" for="flexRadioDefault2">
                Female
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault2" style="cursor:pointer;"
            <?php echo $row['gender'] == 'Male'? 'checked':'';?>>
            <label class="form-check-label" for="flexRadioDefault1">
                Male
            </label>
        </div>
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="mailStatus" value="mailStatus" id="flexCheckDefault" style="cursor:pointer;"
            <?php echo $row['mailStatus'] == 'Yes'? 'checked':'';}?>>
            <label class="form-check-label" for="flexCheckDefault">
                Recieve E-mails from us
            </label>
        </div>
        <br>
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Save" name="saveEditedDetails">
        </div>
    </form>

</body>

</html>