<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BootStrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>

    <form id="userForm" action="db/regist.php" method="post" style="width:600px; margin:50px auto;">
        <h2>Sign Up</h2>
        <hr>
        <p>Please fill this form to create an account</p>
        <div class="mb-3">
            <label for="username" class="form-label">UserName</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="user name" minlength="4" maxlength="20" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password is between 8 and 16 letters" minlength="8" maxlength="16" required>
        </div>
        <br>
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Submit" name="submitUserForm">
            <input type="reset" class="btn" value="Reset" name="resetRegisterationForm">
        </div>
        <br>
        <div class="col-12">
            <p>Already have an account? <a href="login.php" style="text-decoration: none;">Login here.</a></p>
        </div>
    </form>

</body>

</html>