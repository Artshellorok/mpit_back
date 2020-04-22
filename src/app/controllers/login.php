<?php
    use \RedBeanPHP\R as R;
    class Login extends Controller 
    {
        private $google;
        function __construct(){
            $this->google = new Google_Client();
            $this->google->setClientId('15031849662-tpb24sn5cugjodu9ceccabkv8k88lddl.apps.googleusercontent.com');
            $this->google->setClientSecret('Wr5zKDwt_hRDHiyhKAy2L8jH');

            $this->google->setRedirectUri('http://mpit.tk/login');
            $this->google->setApprovalPrompt('force');
            $this->google->addScope('email');
            $this->google->addScope('profile');
        }
        public function index()
        {
            if (!isset($_SESSION['token'])) {
                if (isset($_GET['code'])) {
                    $token = $this->google->fetchAccessTokenWithAuthCode($_GET['code']);
                    if(!isset($token['error'])){
                        $this->google->setAccessToken($token['access_token']);
                        $_SESSION['token'] = $token['access_token'];
                        $google_service = new Google_Service_Oauth2($this->google);

                        $data = $google_service->userinfo->get();
                        $user = R::find('users', 'id = ?',[$data->id]);
                        if (!$user) 
                            R::exec("insert into users(id,name,picture) values('" . $data->id."', '" . $data->name . "','".$data->picture."')");
                        header("Location: /");
                        exit();
                    }
                }
                $this->view('login', ['url' => $this->google->createAuthUrl()]);
            } else {
                header("Location: /");
            }
        }
    }