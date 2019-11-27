<?php
    class siteModel{
        static $title;
        public static function getTitle(){
            return self::$title;
        }
        public static function setTitle($t){
           self::$title = $t;
        }
    }
    class msgModel{
        private $msg;

        public function getMsg(){
            return $this->msg;
        }
        public function setMsg($param){
            $this->msg = $param;
        }
    }
?>