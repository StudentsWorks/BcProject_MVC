<?php

    class Controller {

        public function model($model) {
            require_once '../app/models/'.$model.'.php';
            return new $model;
        }

        public function view($view, $data = ""){
            session_start();
            $_SESSION["contents"] = $data;
            require_once '../app/views/'. $view.'.php';
            session_unset( );
            session_destroy();
        }
    }
