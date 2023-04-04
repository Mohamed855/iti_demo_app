<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3_Task1 Assyment</title>
    <style>
        body {
            font-family: sans-serif;
        }
        #block_container {
            display: flex;
        }
        form {
            display: inline;
        }
        #output {
            display: inline;
            padding: 25px 100px;
        }
        form p, table tr th span{
            font-weight: 500;
            color: red;
        }
        .formLead {
            min-width: 150px;
        }
        table tbody tr th{
            text-align: start;
        }
        #submit {
            cursor: pointer;
            width: 100px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid;
            border: none;
            color: rgb(65, 65, 65);
        }
        #submit:hover {
            background-color: rgb(237, 227, 209);
        }
    </style>
</head>
<body>
    <h1>Application Name: AAST_BIS class registration</h1>

    <div id="block_container">

        <form action="" method="post">

            <p>* Required field</p>

            <table>
                <tbody>
                    <tr>
                        <th class="formLead"><label for="name">Name : </label></th>
                        <th>
                            <input type="text" name="name" id="name" maxlength="20" value="<?php echo isset($_POST["name"])?$_POST["name"]:"";?>">
                            <span> * <?php echo $nameErrMsg;?></span>
                        </th>
                        
                    </tr>
                    <tr>
                        <th class="formLead"><label for="email">E-mail : </label></th>
                        <th>
                            <input type="text" name="email" id="email" maxlength="60" value="<?php echo isset($_POST["email"])?$_POST["email"]:"";?>">
                            <span> * <?php echo $emailErrMsg;?></span>
                        </th>
                    </tr>
                    <tr>
                        <th class="formLead"><label for="group">Group # : </label></th>
                        <th><input type="number" name="group" id="group" min="1" max="10" value="<?php echo isset($_POST["group"])?$_POST["group"]:"";?>"></th>
                    </tr>
                    <tr>
                        <th class="formLead"><label for="classDetails">Class details : </label></th>
                        <th>
                            <textarea name="classDetails" id="classDetails" cols="30" rows="10" style="resize: none;"><?php echo isset($_POST["classDetails"])?$_POST["classDetails"]:"";?></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th class="formLead"><label for="gender">Gender : </label></th>
                        <th>
                            <input type="radio" name="gender" id="gender" value="Female" <?php echo isset($_POST["gender"]) && $_POST["gender"] == "Female"?"checked":"";?>> Female
                            <input type="radio" name="gender" id="gender" value="Male" <?php echo isset($_POST["gender"]) && $_POST["gender"] == "Male"?"checked":"";?>> Male
                            <span> * <?php echo $genderErrMsg;?></span>
                        </th>
                    </tr>
                    <tr>
                        <th class="formLead"><label for="selectedCourses">Select Courses : </label></th>
                        <th>
                            <select name="selectedCourses[]" id="selectedCourses" multiple="multiple">
                                <option value="none" <?php echo isset($_POST["selectedCourses"]) && in_array("none", $_POST["selectedCourses"])?"selected":"";?>>none</option>
                                <option value="HTML" <?php echo isset($_POST["selectedCourses"]) && in_array("HTML", $_POST["selectedCourses"])?"selected":"";?>>HTML</option>
                                <option value="CSS" <?php echo isset($_POST["selectedCourses"]) && in_array("CSS", $_POST["selectedCourses"])?"selected":"";?>>CSS</option>
                                <option value="Javascript" <?php echo isset($_POST["selectedCourses"]) && in_array("Javascript", $_POST["selectedCourses"])?"selected":"";?>>Javascript</option>
                                <option value="MySql" <?php echo isset($_POST["selectedCourses"]) && in_array("MySql", $_POST["selectedCourses"])?"selected":"";?>>MySql</option>
                                <option value="PHP" <?php echo isset($_POST["selectedCourses"]) && in_array("PHP", $_POST["selectedCourses"])?"selected":"";?>>PHP</option>
                                <option value="Laravel" <?php echo isset($_POST["selectedCourses"]) && in_array("Laravel", $_POST["selectedCourses"])?"selected":"";?>>Laravel</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th class="formLead"><label for="agreeTerms">Agree <a href="terms.com">Terms</a> : </label></th>
                        <th>
                            <input type="checkbox" name="agreeTerms" id="agreeTerms" <?php echo isset($_POST["agreeTerms"])?"checked":"";?>>
                            <span> * <?php echo $termsErrMsg;?></span>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2"><br><input id="submit" type="submit" value="Submit" name="D3_task1_form"></td></th>
                    </tr>
                </tbody>
            </table>

        </form>

        <div id="output"><?php echo $output;?></div>

    </div>

</body>
</html>