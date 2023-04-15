<?php

session_start();

if(empty($_SESSION['activeuser'])) {
    echo "<script>
            alert('unauthorized access');
            history.back();
        </script>";
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

    <title>Home</title>
</head>
<body>
    
    <form action="db/logout.php" method="post" style="width:600px; margin:50px auto; text-align: center">
        <div class="col-12">
            <h2>Hello <span style="color: green"><?php echo ucfirst($_SESSION['activeuser']);?></span></h2>
        </div>
        <br>
        <div class="col-12">
            <input type="submit" class="btn btn-danger" value="logout" name="logout">
        </div>
    </form>

</body>
</html>