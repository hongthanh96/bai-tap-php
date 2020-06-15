<?php
    class Stack{
        public $stack;
        public $limit;
        public function __construct($limit){
            $this->limit = $limit;
            $this->stack = [];

        }
        public function isEmpty(){
            return empty($this->stack);
        }
        public function push($item){
            if(count($this->stack) < $this->limit){
               return array_unshift($this->stack, $item);
            }
            else{
                return "Stack is Empty!";
            }
        }
        public function pop(){
            if(!$this->isEmpty()){
              return array_shift($this->stack);
            }
            else{
                return "Stack is Empty!";
            }
        }


    }
?>