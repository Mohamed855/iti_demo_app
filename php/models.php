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

    // Day 2 Assyments

    class Day2_assyments {

        // task 1
        function newLinewithPHP(){
            $txt1 = "This is the first paragraph";
            $txt2 = "This is the second paragraph";
            
            echo nl2br($txt1."\n".$txt2);
        }

        // task 2
        function strFuncs(){
            $str = "In this task i will use some string functions";

            echo '<h1>Text is "'.$str.'"</h1><hr>';
            // string function 1
            echo "<h3>str_split(string \$string, int \$length): array </h3>";
            echo "Convert a string to an array <br>";
            echo "<a href='https://www.php.net/manual/en/function.str-split.php'>refrance</a> <br>";
            print_r(str_split($str, 4));
            echo "<hr>";
            // string function 2
            echo "<h3>str_contains(string \$haystack, string \$needle): bool </h3>";
            echo "Determine if a string contains a given substring <br>";
            echo "<a href='https://www.php.net/manual/en/function.str-contains.php'>refrance</a> <br>";
            echo str_contains($str, "string")? "the text contains 'string' word": "the text doesn't contain 'string' word";
            echo "<hr>";
            // string function 3
            echo "<h3>str_replace(array|string \$search, array|string \$replace, array|string \$subject, int &\$count = null): string|array </h3>";
            echo "Replace all occurrences of the search string with the replacement string <br>";
            echo "<a href='https://www.php.net/manual/en/function.str-replace.php'>refrance</a> <br>";
            echo str_replace(" ", "--", $str);
            echo "<hr>";
        }

        // task 3
        function displayServer(){
            foreach ($_SERVER as $key => $value) {
                echo $key." => ".$value."<br><br>";
            }
        }

        // task 4
        function operationsOnArray(){
            $array = [12, 45, 10, 25];
            $sum = 0;
            foreach ($array as $value) {
                $sum += $value;
            }
            $avg = $sum/count($array);

            print_r($array);
            echo "<br><br>";
            echo "The sum of array is ".$sum;
            echo "<br><br>";
            echo "The avrage of array is ".$avg;
            echo "<br><br>";
            rsort($array);
            echo "Array after sort and reverse : ";
            for ($i=0; $i < count($array); $i++) { 
                echo $i != count($array) - 1 ? $array[$i]." - " : $array[$i];
            }
        }

        // task 5
        function sortAssociativeArray() {
            $array = ["Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40];

            echo "This is an Associative Array <br>";
            print_r($array);
            echo "<br><br>";
            asort($array);
            echo "Sort by value ( ascending order ) <br>";
            print_r($array);
            echo "<br><br>";
            ksort($array);
            echo "Sort by Key ( ascending order ) <br>";
            print_r($array);
            echo "<br><br>";
            arsort($array);
            echo "Sort by value ( descending order ) <br>";
            print_r($array);
            echo "<br><br>";
            krsort($array);
            echo "Sort by key ( descending order ) <br>";
            print_r($array);
        }
    }

    

    // Day 3 Assyments

    class Day3_assyments {

        // task 1
        function formValidate() {

            $nameErrMsg = $emailErrMsg = $genderErrMsg = $termsErrMsg = $output = "";
            
            if (isset($_POST["D3_task1_form"])) {
                if (!empty($_POST["name"])) {
                    if (preg_match("/^([a-zA-Z' ]+)$/", $_POST["name"])) {
                        if (!empty($_POST["email"])) {
                            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                                if (!empty($_POST["gender"])) {
                                    if (!empty($_POST["agreeTerms"])) {
                                        $output .= "<h2>Your given values are :</h2>";
                                        $output .= "<P>Name : ".$_POST['name']."</P>";
                                        $output .= "<P>E-mail : ".$_POST['email']."</P>";
                                        $output .= "<P>Group # : ".$_POST['group']."</P>";
                                        $output .= "<P>Class details : ".$_POST['classDetails']."</P>";
                                        $output .= "<P>Gender : ".$_POST['gender']."</P>";
                                        $output .= "<P>Your courses are : ";
                                        $selectedCourses = $_POST['selectedCourses'];
                                        for ($i=0; $i < count($selectedCourses); $i++) { 
                                            $i != count($selectedCourses) - 1 ? $output .= $selectedCourses[$i]." - " : $output .= $selectedCourses[$i];
                                        }
                                        $output .= "</P>";
                                    } else {
                                        $termsErrMsg = "You must agree to terms";
                                    }
                                } else {
                                    $genderErrMsg = "Gender is required";
                                }
                            } else {
                                $emailErrMsg = "Enter a valid email";
                            }
                        } else {
                            $emailErrMsg = "Email is required";
                        }
                    } else {
                        $nameErrMsg = "Enter a valid name";
                    }
                } else {
                    $nameErrMsg = "Name is required";
                }
            }

            include("php_D3_task1.php");
        }

        // task 2
        function displayArray() {

            $students = [
                ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
                ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
                ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
                ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
                ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
            ];

            echo "<h1>Application name: PHP class registration</h1>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
            <tbody>";
                foreach ($students as $stuDetails) { 
                    $stuDetails['status'] === "CMS"? $color = "color:red;": $color = "color:black;";
                    echo "<tr style='".$color."'>
                    <th>".$stuDetails['name']."</th>
                    <th>".$stuDetails['email']."</th>
                    <th>".$stuDetails['status']."</th></tr>";
                }
            echo "</tbody>
            </table>";

        }
    }

?>