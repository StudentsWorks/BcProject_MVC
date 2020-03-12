<?php

    require_once '../app/core/Controller.php';

    class MyErrorHandler extends Controller {

        public function index() {
            $this->view('home/error');
        }       
    }