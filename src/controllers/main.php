<?php
    use \App\Auth;

    class Main extends Controller 
    {
        public function index()
        {
            Auth::check();
        }
    }