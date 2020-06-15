<?php
    include_once ("Patient.php");
    class Queue{
        public $font = null;
        public $back = null;
        public $count = 0;
        public function isEmpty(){
            return $this->font == null;
        }
        public function enqueue($name,$code){
            $oldback = $this->back;
            $this->back = new Patient($name,$code);
            $this->back->name = $name;
            $this->back->code =$code;
            if($this->isEmpty()){
                $this->font = $this->back;
                $this->count++;

            }
            else{
                $oldback->next = $this->back;
                $this->count++;
                // return $oldback;
               
            }
        }
        public function dequeue(){
            if($this->isEmpty()){
                return null;
            }
            else{
                $removeName = $this->font->name;
                $removeCode = $this->font->code;
                $this->font = $this->font->next;
                return $removeName.$removeCode;
            }
        }
        public function __toString()
        {   
            $parientList = array();
            $current = $this->font;
            // var_dump($current->next);
            while (!$this->isEmpty()){
                if($current->readNode()) {
                    array_push($parientList,$current->readNode());
                    $current = $current->next;
                }
                
            }
            return $parientList;
}
    }

?>