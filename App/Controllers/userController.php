<?php

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
            $file = $_FILES['profile_image']['name'];
            $url_temp = $_FILES['profile_image']['tmp_name'];
            $url_dest = "/Public/Assets/img/profiles/";
            $url_final = $url_dest . $file;
            if (!file_exists($url_dest)) {
                mkdir($url_dest, 0777, true); 
            }

            if (move_uploaded_file($url_temp, $url_final)) {
                echo "El fitxer " . htmlspecialchars(basename($file)) . " s'ha carregat amb èxit!";
            } else {
                echo "Error al carregar el fitxer.";
            }

            echo "Estic al mètode store";
        }

        public function getById(){
            echo "Estic al mètode getById";
        }

}

?>