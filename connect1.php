<?php

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');


    if(!empty($email)){
        if(!empty($password)){
            $host = "localhost:3306";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "pharmacity";

            //Create a Connection
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);  

            if(mysqli_connect_error()){
                die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO account (email, password) values ('$email', '$password')";
                if($conn->query($sql)){
                    header("Location: sign.html");
                }
                else{
                    header("Location: invalid.html");
                }
                $conn->close();
            }
        }
        else{
            echo "Password should not be empty";
            die();
        }
    }
    else{
        echo "Username should not be empty";
        die();
    }
?>