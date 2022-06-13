<?php
require("../control/verify.php");
?>
<html>
    <head>
        <title>Lab Task 1</title>
    </head>

    <body>
        <h1>Registration Form</h1>
        <form action="" method="POST" >

            <table>
            
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
                
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"></td>
            </tr>

            <tr>
                <td>Designation:</td>
                <td>
                        <input type="radio" name="designation">Junior Programmer
                        <input type="radio" name="designation">Senior Programmer 
                        <input type="radio" name="designation">Project Lead
                    </td>
            </tr>

            <tr>
                <td>Preferred Language:</td>
                <td>
                        <input type="checkbox" name="designation">JAVA
                        <input type="checkbox" name="designation">PHP 
                        <input type="checkbox" name="designation">C++
                    </td>
            </tr>

            <tr>
                    <td>E-mail:</td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                
                <tr>
                    <td>Please choose a file</td>
                    <td><input type="file"></td>
                </tr>
        
                <tr>
                    <td>
                        <input type="submit" name="submission" value="Submit">
                    <input type="reset" name="submission" value="Reset">
                    </td>   
                </tr>

            </table>
        </form>
    </body>
    
</html>