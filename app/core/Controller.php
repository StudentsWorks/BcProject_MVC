<?php

    class Controller {
        //Vráti novú inštanciu zadaného modelu
        public function model($model) {     
            require_once 'app/models/'.$model.'.php';
            return new $model;
        }
        //Zavolá zadaný pohľad
        //Aby sme mohli zavolať pohľad aj s nejakými parametrami,
        //inicializujeme tu $_SESSION, a na konci funkcie ju zničíme
        public function view($view, $data = ""){
            session_start();    
            $_SESSION["contents"] = $data;
            require_once 'app/views/'. $view.'.php';
            session_unset( );
            session_destroy();
        }
    }
