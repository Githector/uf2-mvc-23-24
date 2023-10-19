<?php
include_once(__DIR__ . "/../Helpers/userHelper.php");
include_once(__DIR__ . "/../Models/User.php");
include_once(__DIR__ . "/../Core/Store.php");
include_once(__DIR__ . "/../Core/Mailer.php");

    class userController extends Controller{


        public function index(){
            $userModel = new User();
            $llista = $userModel->getAll();
            $this->render('list', array($llista), 'site');
            
        }

        public function create(){

            $this->render('user/create', [], 'site');
            
        }

        public function store(){


            
            $user = array(
                "username" => $_POST['username'],
                "firstname" => $_POST['first_name'],
                "lastname" => $_POST['last_name'],
                "email" => $_POST['email'],
                "birthdate" => $_POST['birthdate'],
                "pass" => $_POST['password'],
                "profile" => null,
                "token" => generateToken(),
                "verified" => false
            );
            
           
            $file = $_FILES['profile_image']['name'];
            $nameFileArray = explode('.',$file);
            $user['profile'] = $user['username'] . "." . $nameFileArray[1];
            
            // echo "<pre>";
            // print_r($user);
            // echo "</pre>";

            $userModel = new User();
            $userModel->store(($user));

            // echo "<pre>";
            // print_r($_SESSION['users']);
            // echo "</pre>";


            $url_temp = $_FILES['profile_image']['tmp_name'];
            $url_dest = "img/profiles/";

            Store::file($url_temp,$url_dest,$user['profile']);

            $mailer = new Mailer();
            $mailer->mailServerSetup();
            $mailer->addRec(array($user['email']));
            $mailer->addVerifyContent($user);

            $mailer->send();


            echo "Estic al mètode store";
        }

        
        public function verify(){
            echo "<pre>";
            print_r($_SESSION['users']);
            echo "</pre>";
            $userModel = new User();
            $user = $userModel->getByUsername($_GET['username']);
            if($user['token'] == $_GET['token']){
                $user['verified'] = true;
            }
            $userModel->update($user);
            echo "<pre>";
            print_r($_SESSION['users']);
            echo "</pre>";
            echo "Estic al mètode getById";
        }


}

?>