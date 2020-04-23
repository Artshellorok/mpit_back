<?php
    use \App\Auth;

    class Main extends Controller 
    {
        public function index()
        {
            $this->view('main');
        }
    }