<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="verification.php">
        <table>
            <tr>
                <td>last name:</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>first name:</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>phone:</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>date of birth:</td>
                <td><input type="text" name="dob"></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <td>confirm password:</td>
                <td><input type="text" name="cpass"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <?php

require_once('../controller/employeC.php');
require_once('../model/employer.php');

?>




</body>
</html>
