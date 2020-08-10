<?php

$first_name = $last_name = $email = $dob = $select = $gender = $color = $password = "";

//Check for errors
$errors = array('first_name' => '', 'last_name' => '', 'email' => '', 'dob' => '', 'select' => '', 'gender' => '', 'color' => '', 'password' => '', 'checkForm' => '');


if(isset($_POST['submit'])){

    session_start();

    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $select = htmlspecialchars($_POST['select']);
    $gender = $_POST['gender'];
    $color = htmlspecialchars($_POST['color']);

    $_SESSION['color'] = $color;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['email'] = $email;
    $_SESSION['dob'] = $dob;
    $_SESSION['select'] = $select;
    $_SESSION['gender'] = $gender;

    if(empty($_POST['first_name'])){
        $errors['first_name'] = "First Name cannot be empty";
    } else {
        $first_name;
        if(!preg_match("/^[a-zA-Z ]*$/", $first_name)){
            $errors['first_name'] = "Name should contain only white spaces and letters";
        }
    }

    if(empty($_POST['last_name'])){
        $errors['last_name'] = "Last Name cannot be empty";
    } else {
        $last_name;
        if(!preg_match("/^[a-zA-Z ]*$/", $last_name)){
            $errors['last_name'] = "Name should contain only white spaces and letters";
        }
    }

    if(empty($_POST['email'])){
        $errors['email'] = "Email cannot be empty";
    } else {
        $email;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Input the correct email";
        }
    }

    if(empty($_POST['dob'])){
        $errors['dob'] = "Choose a date";
    } else {
        $dob;
        if($dob > date("Y-m-d")){
            $errors['dob'] = "You cant choose a date of birth from the future";
        }
    }

    if(empty($_POST['gender'])){
        $errors['gender'] = "Please choose a gender";
    } 

    if(!empty($_POST['gender'])){
        $no_checked = count($_POST['gender']);
        if($no_checked > 1){
            $errors['gender'] = "Please choose just one gender";
        } else{
            $gender;
        }
    }

    if(empty($_POST['select'])){
        $errors['select'] = "Please choose a department";
    } else{
        $select;
    }

   

    
    if(empty($_POST['password'])){
        $errors['password'] = "Please input a password";
    } else{
        $password;
        $pattern = "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{15,}$/";
        if(!preg_match($pattern, $_POST['password'])){
            $errors['password'] = "Password should contain an UpperCase letter, a number, a special character";
        }
    }

    if(!array_filter($errors))
    {
        header('Location: new_page.php');
    }

}




?>
