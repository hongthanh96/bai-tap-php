<?php
    include_once ("Dancer.php");
    $dancer_Male = new SplQueue;
    $dancer_Female = new SplQueue;
    function Pairing($dancer_Male,$dancer_Female){
        if($dancer_Male->isEmpty() || $dancer_Female->isEmpty()){
            return "Không đủ cặp nên không thể ghép đôi!";
        }
        else{
            $person1 = $dancer_Male->dequeue();
            $person2 = $dancer_Female->dequeue();
            return "$person1->name đã ghép đôi với $person2->name<br>";

        }
    }
    $dancer1 = new Dancer("Hiệp","Male");
    $dancer_Male->enqueue($dancer1);
    $dancer2 = new Dancer("Thi","Male");
    $dancer_Male->enqueue($dancer2);
    $dancer3 = new Dancer("Đức","Male");
    $dancer_Male->enqueue($dancer3);
    $dancer4 = new Dancer("Vân", "Female");
    $dancer_Female->enqueue($dancer4);
    $dancer5 = new Dancer("Thanh", "Female");
    $dancer_Female->enqueue($dancer5);
    $dancer6 = new Dancer("Thúy", "Female");
    $dancer_Female->enqueue($dancer6);
    $dancer7 = new Dancer("Linh", "Female");
    $dancer_Female->enqueue($dancer7);
    while(!$dancer_Male->isEmpty() && !$dancer_Female->isEmpty()){
       echo Pairing($dancer_Male,$dancer_Female);
    }

?>