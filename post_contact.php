<?php
//sanatisation
/*$options = array(
    'gender' 	    => FILTER_SANITIZE_STRING,
    'countries' 	=> FILTER_SANITIZE_STRING,
    'firstname' 	=> FILTER_SANITIZE_STRING,
    'lastname' 	    => FILTER_SANITIZE_STRING,
    'email' 		=> FILTER_VALIDATE_EMAIL,
    'choice' 	    => FILTER_SANITIZE_STRING,
    'message' 		=> FILTER_SANITIZE_STRING);

$result = filter_input_array($_POST, $options);
if ($result != null AND $result != FALSE) {
	echo "Tous les champs ont été nettoyés !";
} else {
	echo "Un champ est vide ou n'est pas correct!";
}

foreach($options as $key => $value) 
{
   $result[$key]=trim($result[$key]);
}

echo $result['firstname'];
echo $result['lastname'];
echo $result['email'];
echo $result['message'];*/

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
if(!array_key_exists('gender',$_POST)|| $_POST['gender']==''){
    $errors['gender']="you didn't enter your gender";
}
if(!array_key_exists('countries',$_POST)|| $_POST['countries']=='Select a Country'){
    $errors['countries']="you didn't enter your country";
}
if(!array_key_exists('choice',$_POST)|| $_POST['choice']=='Select a choice'){
    $errors['choice']="you didn't enter your choice";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors']=$errors;
    $_SESSION['inputs']=$_POST;
    header('Location: contact.php');
}
else{
    $_SESSION['success']=1;
    $gender=$_POST['gender'];
    $countries=$_POST['countries'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $choice=$_POST['choice'];
    $message=$_POST['message'];
    $contenu= $message;
    $headers= 'From: webmaster@example.com'. "\r\n";
    $headers .= "Content-Type:text/html;charset=utf-8";

    mail('christinesautelet@gmail.com','formulaire de contact',$contenu,$headers, "-f".$email);
    header('Location: contact.php');
    //$countries."\n"."\n".$gender." ".$firstname." ".$lastname."\n".$email."\n"."\n".$choice."\n"."\n".
}
var_dump($errors);
die();
