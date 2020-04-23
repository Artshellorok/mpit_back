<?php
    class Request 
    {
        protected $items = [];
        protected $errors = [];
        protected function sanitize(&$items)
        {
            foreach($items as &$item)
            {
                $item = strip_tags($item);
            }
            return $items;
        }
        function __construct()
        {
            if(!empty($_POST)){
                $this->items = $_POST;
            }
        }
        public function all()
        {
            return $this->items;
        }
        public function required($required)
        {
            foreach($required as $require)
            {
                if(!isset($this->items[$require])){
                    array_push($this->errors, "$require is required");
                }
            }
            return $this->errors;
        }
    }