<?php
    include_once ("Queue.php");
    $queue = new Queue();
    $queue->enqueue("Smith",5);
    $queue->enqueue("Jones",4);
    $queue->enqueue("Fehrenbach",6);
    $queue->enqueue("Brown",1);
    $queue->enqueue("Ingram",1);
    var_dump($queue);
    echo "Khám BN: ".$queue->dequeue();
    var_dump($queue);




?>