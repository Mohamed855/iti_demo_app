<?php

include('dbConnection.php');

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Record deleted successfully');
    history.back();
    </script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>