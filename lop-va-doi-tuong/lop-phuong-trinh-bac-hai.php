<?php
    class QuadraticEquation{
       private $numa;
       private $numb;
       private $numc;
        function __construct($numa,$numb,$numc){
           $this->numa = $numa;
           $this->numb = $numb;
           $this->numc = $numc;
       }
       function checknum(){
           if($this->numa == ""){
               return $this->numa = 0;
           }
           if($this->numb == ""){
            return $this->numb = 0;
            }
            if($this->numa == ""){
                return $this->numc = 0;
            }
            return "Giải phương trình: ".$this->numa."x^2 + ".$this->numb."x +".$this->numc."= 0 <br>";

       }
       function getDiscriminant(){
          
           if($this->numa == 0){
               if($this->numb == 0){
                   return "Phương trình vô nghiệm!";
               }
               else{
                   return "Phương trình có một nghiệm: x = ".(-$this->numc)/$this->numb;
               }
           }
           $delta =  ($this->numb**2) - (4*$this->numa*$this->numc); 
           $x1 = "";
           $x2 = "";
           if($delta > 0){
               $x1 = round((-$this->numb + sqrt($delta))/(2*$this->numa),2);
               $x2 = round((-$this->numb - sqrt($delta))/(2*$this->numa),2);
               return "Phương trình có 2 nghiệm: x1 = ".$x1." và x2 = ".$x2;
           }
           if($delta = 0){
               $x1 = round((-$this->numb)/(2*$this->numa));
               return "Phương trình có nghiệm kép x1 = x2 = ".$x1;
           }
           else{
               return "phương trình vô nghiệm!";
           }
       }
    }
    if(isset($_POST["add"])){
        $numa = (float)$_POST["numa"];
        $numb = (float)$_POST["numb"];
        $numc = (float)$_POST["numc"];
        $quadraticEquation = new QuadraticEquation($numa,$numb,$numc);
        echo $quadraticEquation->checknum();
        echo $quadraticEquation->getDiscriminant();



    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp phương trình bậc hai</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
    <h2>Giải phương trình bậc hai ax^2 + bx +c </h2>
    <div>
    <label for="">a: </label>
    <input type="number" name="numa" id="">
    </div>
    <div>
    <label for="">b: </label>
    <input type="number" name="numb" id="">
    </div>
    <div>
    <label for="">c: </label>
    <input type="number" name="numc" id="">
    </div>
    <div>
    <input type="submit" value="Submit" name="add">
    </div>
   
    </form>
</body>
</html>