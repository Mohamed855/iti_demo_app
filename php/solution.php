<?php
    
    // modules

    include("models.php");

    // objects

    $day1 = new Day1_assyments();
    $day2 = new Day2_assyments();
    $day3 = new Day3_assyments();

    // page view 

    // day1 assyments view
    if(isset($_POST['D1_task1'])) {
        $day1 -> phpInfo();
    }
    elseif (isset($_POST['D1_task2'])) {
        $day1 -> websiteName();
    }
    elseif (isset($_POST['D1_task3'])) {
        $day1 -> serverDetails();
    }
    elseif (isset($_POST['D1_task4'])) {
        $day1 -> divideKids();
    }

    // day2 assyments view
    elseif (isset($_POST['D2_task1'])) {
        $day2 -> newLinewithPHP();
    }
    elseif (isset($_POST['D2_task2'])) {
        $day2 -> strFuncs();
    }
    elseif (isset($_POST['D2_task3'])) {
        $day2 -> displayServer();
    }
    elseif (isset($_POST['D2_task4'])) {
        $day2 -> operationsOnArray();
    }
    elseif (isset($_POST['D2_task5'])) {
        $day2 -> sortAssociativeArray();
    }

    // day3 assyments view
    elseif (isset($_POST['D3_task1']) || isset($_POST['D3_task1_form'])) {
        $day3 -> formValidate();
    }
    elseif (isset($_POST['D3_task2'])) {
        $day3 -> displayArray();
    }

    // day4 assyment view
    elseif (isset($_POST['D4_task1']) 
    || isset($_POST['submitUserForm']) 
    || isset($_POST['addNewUser']) 
    || isset($_POST['saveEditedDetails'])) {
        $day4 -> demoDB();
    }

    // unauthorized
    else {
        print "unauthorized access";
    }

?>