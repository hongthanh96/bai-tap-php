<?php
    class Stack{
        public $stack;
        public $limit;
        public function __construct($limit)
        {
            $this->stack = [];
            $this->limit = $limit;
        }
        public function isEmpty(){
            return empty($this->stack);
        }
        public function push($item){
            if(count($this->stack) < $this->limit){
                array_unshift($this->stack,$item);
            }
            else{
                return "Stack is full!";
            }
        }
        public function pop(){
            if(!$this->isEmpty()){
                array_shift($this->stack);
            }
            else{
                return "Stack is Empty!";
            }
        }

    }
?>