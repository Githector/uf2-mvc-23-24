<?php

    class userController extends Controller{

        public function home(){
            echo "Estic al mètode Home ";
        }

        public function list(){
            $userModel = new User();
            $llista = $userModel->getAll();
            $this->render('list', array($llista), 'site');
         
        }

        public function create(){
            echo "Estic al mètode create";
        }

        public function update(){
            echo "Estic al mètode update";
        }

        public function getById(){
            echo "Estic al mètode getById";
        }

}

?>