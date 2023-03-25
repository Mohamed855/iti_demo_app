<?php

    // day 1 Assyments

    class Day1_assyments {

        // task 1
        function phpInfo() {
            return phpinfo();
        }

        // task 2
        function websiteName() {
            return $_SERVER["SCRIPT_NAME"];
        }

        // task 3
        function serverDetails() {
            $server_name = $_SERVER["SERVER_NAME"];
            $server_address = $_SERVER["SERVER_ADDR"];
            $server_port = $_SERVER["SERVER_PORT"];
            $path = __FILE__;
            $output = "Server name : $server_name <br> Server address : $server_address <br> Server port : $server_port <br> File path : $path <br>";
            return $output;
        }

        // task 4
        function divideKids() {
            $kidAge = 6;
            $kidGrade = $kidAge - 6;
            $msg = "";
            switch (true) {
                case $kidAge >= 1 && $kidAge < 5:
                    $msg = "Stay at home";
                    break;
                case $kidAge == 5:
                    $msg = "Go to Kindergarden";
                    break;
                case $kidAge == 6:
                    $msg = "Go to Grade : 1";
                    break;
                case $kidAge > 6 && $kidAge <= 12:
                    $msg = "Go to Grade : {$kidGrade}";
                    break;
                default:
                    $msg = "please enter a kid age between 1 and 12 years old";
                    break;
            }
            return $msg;
        }
    }

?>