<?php
    class Home extends Controller 
    {
        public function index()
        {
            return "test";
        }
        public function name($name = '')
        {
            return $this->request()->all();
        }
    }