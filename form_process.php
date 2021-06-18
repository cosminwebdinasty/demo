<?php 


$name =  [

    'stuff1',
    'stuff2',
    'stuff3',
    'stuff4',
];

$passlength = 6;

    $username = $_POST['user'];
    $password = $_POST['pass'];


    if(isset($username) && in_array($username, $name)){

     echo "Welcome ". $username ."<br>";
    }

    else echo "<br>User not found <br>";


    if(!isset($password)){

        echo "The password is required <br>";
    }

    if(strlen($password < $passlength)){
        echo "The password is too short";
    }


?>