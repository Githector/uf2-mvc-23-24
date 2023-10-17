<?php

    class mainController extends Controller{

        public function home(){
            $this->render('home', [], 'site');
            
        }

        public function list(){
            $this->render('list', [], 'site');
        }

        public function create(){
            $this->render('create', [], 'site');
        }

        public function update(){
            $this->render('update', [], 'site');
        }

        public function getById(){
            
        }

}

?>