<?php
    
    // modules

    include("models.php");

    // objects

    $day1 = new Day1_assyments();

    // page view 

    if(isset($_POST['task1'])) {
        echo($day1 -> phpInfo());
    }
    elseif (isset($_POST['task2'])) {
        print_r($day1 -> websiteName());
    }
    elseif (isset($_POST['task3'])) {
        print_r($day1 -> serverDetails());
    }
    elseif (isset($_POST['task4'])) {
        print_r($day1 -> divideKids());
    }
    else {
        echo "unauthorized access";
    }

?>