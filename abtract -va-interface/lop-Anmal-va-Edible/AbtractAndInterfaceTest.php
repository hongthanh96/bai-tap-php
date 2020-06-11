<?php
    include_once "Tiger.php";
    include_once "chicken.php";
    include_once "Orange.php";
    include_once "Apple.php";
    $animals[0] = new Tiger();
    $animals[1] = new Chicken();
    foreach($animals as $animal){
        echo $animal->makeSound()." ";
        if($animal instanceof Chicken){
            echo $animal->howtoEat()."<br>";
        }
    }
    $fruits[0] = new Orange();
    $fruits[1] = new Apple();
    foreach($fruits as $fruit){
        echo $fruit->howtoEat()."<br>";
    }

?>