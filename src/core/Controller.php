<?php
    class Controller
    {
        public function view($view, $data = [])
        {
            require_once "../resources/views/" . $view . ".php";
        }
        public function request(){
            require_once "Request.php";
            return new Request;
        }    
    }