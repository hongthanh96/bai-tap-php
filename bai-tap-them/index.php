<?php include ("class_lib.php");?>



<?php
  $stefan = new person("Thanh");
  $jimmy = new person("Vân");
  echo "stefan of name: ".$stefan->get_name()."<br>";
  echo "jimmy of name: ".$jimmy->get_name();
  echo "Tell me pravite".$jimmy->pinn_number;


?>