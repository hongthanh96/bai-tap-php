<?php
include_once ("queue.php");
    $queue = new Queue();
    $queue->enqueue("One");
    $queue->enqueue("Two");
    $queue->enqueue("Three");
    $queue->dequeue();
    $queue->dequeue();
    $queue->isEmpty();
    $queue->enqueue("Four");
    $queue->enqueue("Five");
    $queue->dequeue();
    $queue->dequeue();
    $queue->dequeue();
    echo $queue->isEmpty();
    while(!$queue->isEmpty()){
      echo $queue->dequeue()."\n";
    }
