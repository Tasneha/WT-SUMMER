<?php
require ("../control/phpcode.php");
?>

<html>
    <head>
        <title>
            Registration Form
        </title>
    </head>
        <body>
            <h1>Registration</h1>
            <form action="" method="Post" enctype="multipart/form-data">
               Username: <input type = "text" name="username">
                        <?php
                        echo $usernameError;
                        ?>
<br>
                Password: <input type = "password" name="password"><br>
                    
                Designation: <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                            <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                            <input type="radio" name="designation" value="Project Lead">Project Lead
                                            <br>
                Preferred language: <input type="checkbox" name="JAVA" value="Java">Java
                                    <input type="checkbox" name="PHP" value="PHP">PHP
                                    <input type="checkbox" name="C++" value="C++">C++
                                    <br>
                        
                Email: <input type = "email" name="email" id="">
                <br>        
                Select file to upload:
                             <input type ="file" name= "myfile" value="picture">
                             
                             <br>
<td><input type="submit" name="submission"></td>
<td><input type="reset" name="Reset"></td>


                </table>

            </form>
        </body>
   
</html>