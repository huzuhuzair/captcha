<?php

    include ('messageModel.tpl');
    abstract class imageModel extends messageModel {
        private $image,$size,$width,$height,$location,$prefix,$renamed;

        public function getImage(){
            return $this->image;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function getSize(){
            return $this->size;
        }
        public function setSize($size){
            $this->size = $size;
        }
        public function getWidth(){
            return $this->width;
        }
        public function setWidth($width){
            $this->width = $width;
        }
        public function getHeight(){
            return $this->height;
        }
        public function setHeight($height){
            $this->height = $height;
        }
        public function getLocation()
        {
            return $this->location;
        }
        public function setLocation($location){
            $this->location = DOCUMENTROOT.$location;
        }
        public function getPrefix(){
            return $this->prefix;
        }
        public function setPrefix($prefix){
            $this->prefix = $prefix;
        }
        public function getRenamed(){
            return $this->renamed;
        }
        public function setRenamed($renamed){
            $this->renamed = $renamed;
        }


    }
?>