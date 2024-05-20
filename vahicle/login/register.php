<?php
include 'connect.php';
if (isset($_POST['signUp'])){
    $firstname = $_POST['fName'];
    $lastname = $_POST['lName'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);


    $checkEmil=" SELECT * FROM users where email='$email' ";
    $result=$conn->query($checkEmil);
    if($result -> num_rows>0){
        echo "Email already Exist";
    }else{
        $insertQuery="INSERT INTO users(firstname,lastname,email,password) 
        VALUES('$firstname','$lastname','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: login.php");
        }
        else{
            echo "erro".$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users where email='$email' and password='$password' ";
    $result=$conn->query($sql);
    if($result -> num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location:http://localhost/vahicle/main/mainpage.php");

    }    
    else{
        echo "Error Incorrect Email or Password";
    }


   
}

?>