<?php
include ("stack.php");
$myBooks = new Stack();

$myBooks->push('One');
$myBooks->push('Two');
$myBooks->push('Three');
$myBooks->push('Four');
$myBooks->push('Five');  
$myBooks->pop();
$myBooks->pop();
$myBooks->pop();
$myBooks->push('Six');
$myBooks->push('Seven');
$myBooks->isEmpty();
$myBooks->pop();
$myBooks->pop();
$myBooks->pop();
$myBooks->pop();
echo $myBooks->isEmpty();
// echo $myBooks->top();

?>