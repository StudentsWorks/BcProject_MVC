<?php
    class App {
        
        protected $controller = 'home';
        protected $method = 'index';
        protected $params = array();
        
        public function __construct (){
            $url = $this->parseUrl();

            
            if (file_exists('../app/controllers/'. $url[0]. '.php' )) {
                $this->controller = $url[0];
                unset($url[0]);
            }

            require_once '../app/controllers/'.$this->controller.'.php';

            $this->controller = new $this->controller;
            
            if (file_exists('../app/views/home/'. $url[0]. '.php' )) {
                if (method_exists($this->controller, $url[0])){
                    $this->method = $url[0];
                } else {
                    $this->method = 'universal';
                }

            }
            
            if (isset($url[1]) and $this->method == 'index'){
                if (method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                }
            } 

            $this->params = $url ? array_values($url) : [];
            /*var_dump($this->params);
            print "<br>";
            var_dump($this->method);*/

            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseUrl() {
            if (isset($_GET['url'])) {
                $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
                return $url;
            }
            
        }
    }