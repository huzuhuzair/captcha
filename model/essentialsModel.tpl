<?php
    include ('imageModel.tpl');
    abstract class essentialsModel extends imageModel {
        private $sort,$limit,$search;


        public function getSort(){
            return $this->sort;
        }
        public function getLimit(){
            return $this->limit;
        }
        public function getSearch(){
            return $this->search;
        }

        public function setSort($sort){
            $this->sort = $sort;
        }
        public function setLimit($limit){
            $this->limit = $limit;
        }
        public function setSearch($search){
            $this->search = $search;
        }
    }
?>