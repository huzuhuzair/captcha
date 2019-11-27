<?php

    abstract class messageModel {
        private $message;
        public function getMessage(){
            return $this->message;
        }
        public function setMessage($param){
            $this->message = $param;
        }
    }
?>