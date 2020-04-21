<?php
    namespace App;

    class Auth {
        static private $google;
        public static function init(){
            $google = new \Google_Client();
            $google->setClientId('15031849662-tpb24sn5cugjodu9ceccabkv8k88lddl.apps.googleusercontent.com');
            $google->setClientSecret('Wr5zKDwt_hRDHiyhKAy2L8jH');

            $google->setRedirectUri('http://mpit.tk/login');
            $google->setApprovalPrompt('force');
            $google->addScope('email');
            $google->addScope('profile');

            self::$google = $google;
        }
        public static function check() {
            self::init();
            if (!isset($_SESSION['token'])) {
                header("Location: /login");
            }
        }
    }