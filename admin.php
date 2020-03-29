<?php

    session_start();
    $con = mysqli_connect('localhost', 'root');
    if($con){
        echo "connection succesful";
    }
    else
    {
        echo "no connection";
    }

    $db = mysqli_select_db($con, 'cdrdatabse');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = " select * from admintable where user = '$username' and pass = '$password' ";
        $query = mysqli_query($con,$sql);
        $row = mysqli_num_rows($query);
            if($row==1){
                echo "login successful";
                $_SESSION['user'] = $username;
                header('location:welcome.html');
            }
            else{
                echo "login failed";
                header('location:login.html');
            }
        
        
    }

?>