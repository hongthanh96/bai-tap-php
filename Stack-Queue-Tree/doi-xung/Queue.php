<?php
    class Queue{
        public $QueueList;
        public $count;
        public function __construct()
        {
            $this->QueueList = [];
            $this->count = 0;
        }
        public function isEmpty(){
            return empty($this->QueueList);
        }
        public function enqueue($data){
            return array_push($this->QueueList,$data);
            $this->count++;
        }
        public function dequeue(){
            if(!$this->isEmpty()){
                return array_shift($this->QueueList);
                $this->count--;
            }
            else{
                return "Queue is Empty!";
            }
           
        }

    }
?>