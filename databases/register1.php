<?php
    ob_start();
    require_once 'Connection.php';

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // check if the username exists
    $query = "select username from tblUsers where username = '$username';";
    
    $result = mysqli_query($conn, $query);

    // if a row was fetched, username exists
    if (mysqli_num_rows($result) > 0)
    {
        header('location:register.php?result=userexists');
        ob_end_flush();
        die();
    }
    else
    {
        // insert the user info to the database
        $query = "Insert into tblUsers (username,password) Values ('".$username."', '".$hashed_password."');";

        $result = mysqli_query($conn, $query);

        if ($result == 1)
        {
            header('location:register.php?result=success');
            ob_end_flush();
            die();
        }
        else
        {
            header('location:register.php?result=fail');
            
        }
    }
?>
