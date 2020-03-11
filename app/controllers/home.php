<?php

    class Home extends Controller {
        
        public function index() {
            $this->view('home/index');
        }

        public function universal($view) {
            //print "<h1>".$view."</h1><br>";
            $this->view('home/'.$view);
        }
    }