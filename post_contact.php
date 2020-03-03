<?php
$errors=[];
if(!array_key_exists('firstname',$_POST)|| $_POST['firstname']==''){
    $errors['firstname']="you didn't enter your firstname";
}
if(!array_key_exists('lastname',$_POST)|| $_POST['lastname']==''){
    $errors['lastname']="you didn't enter your lastname";
}
if(!array_key_exists('email',$_POST)|| $_POST['email']=='' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email']="you didn't enter a valid email";
}
if(!array_key_exists('message',$_POST)|| $_POST['message']==''){
    $errors['message']="you didn't enter your message";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors']=$errors;
    $_SESSION['inputs']=$_POST;
    header('Location: contact.php');
}
else{
    $_SESSION['success']=1;
    $message=$_POST['message'];
    $headers='FROM: google@google.com';
    mail('christinesautelet@gmail.com','formulaire de contact',$message,$headers);
    header('Location: contact.php');
}
var_dump($errors);
die();
