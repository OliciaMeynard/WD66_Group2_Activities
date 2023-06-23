<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';


if($_POST['password'] != $_POST["passwordConfirm"]){
    echo "You cannot proceed to your account because password does not match";
    exit();
}

$name = ucfirst(strtolower($_POST['firstname'])).' '.ucfirst(strtolower($_POST['lastname']));


echo "Hi ".$name.'<br>';
echo "Welcome to My System".'<br>';
echo "Your birthday is ".$_POST['birthday'].'<br>';
echo "You are currently residing at ".$_POST['address'].', '.$_POST['city'].', '.$_POST['province'].'<br>';
echo "Your email is ".strtolower($_POST['email']).'<br>';


function checkSubscribe(){

    if(!in_array('subscribe',$_POST)){
        return ' ';
    } else {
        return "Thanks for subscribing to our latest news".'<br>';
    }

}

echo checkSubscribe();


echo '<br>';
echo "Thank you for registering".'<br>';



?>