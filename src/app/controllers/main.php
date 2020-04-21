<?php
    use \App\Auth;

    class Main extends Controller 
    {
        public function index()
        {
            if (Auth::check()) {
                header("Location: /login");
            }
        }
    }