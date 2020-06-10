<?php
namespace Employees;
class Employee{
    public $fistName;
    public $lastName;
    public $birthDay;
    public $address;
    public $possition;
    public function __construct($fistName,$lastName,$birthDay,$address,$possition)
    {
        $this->fistName = $fistName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->address =$address;
        $this->possition = $possition;
    }
    function setFistname($name){
        $this->fistName = $name;
    }
    function getfistName(){
        return $this->fistName;
    }
    function setlastName($name){
        $this->lastName = $name;
    }
    function getlastName(){
        return $this->lastName;
    }
    function setbirthDay($birthday){
        $this->birthDay = $birthday;
    }
    function getbirthDay(){
        return $this->birthDay;
    }
    function setaddress($address){
        $this->address = $address;
    }
    function getaddress(){
        return $this->address;
    }
    function setpossition($possition){
        $this->possition = $possition;
    }
    function getpossition(){
        return $this->possition;
    }
}


?>
