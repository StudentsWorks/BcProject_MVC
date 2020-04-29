<?php
    class App {
        
        protected $controller = 'MyErrorHandler';       //Predvolené nastavenia. 
                                                        //Ak sa nenájde žiadny iný kontrolór, zavoláme MyErrorHandler.
        
        protected $method = 'index';                    //Ak sa nenaje iná metóda, zavoláme index
        protected $params = array();                    //Ak neodovzdáme žiadne parametry, zavoláme metódu bez parametrov
        
        public function __construct (){
            $url = $this->parseUrl();                   //poz. riadok 48

            if (empty($url)) {                          //Ak nie je nič v adresnom riadku,
                $this->controller = 'home';             //priradíme $this->controller hodnotu home
            }

            if (file_exists('app/controllers/'. $url[0]. '.php' )) {
                $this->controller = $url[0];            //Ak prvý prvok pola $url zodpovedá nejakému existujúcemu kontrolór,
                unset($url[0]);                         //priradíme $this->controller tuto hodnotu
            }           
            
            if (file_exists('app/views/home/'. $url[0]. '.php' )) {
                                                        //Ak prvý prvok pola $url zodpovedá nejakému existujúcemu pohľadu,
                $this->controller = 'home';             //priradíme $this->controller hodnotu home
                if (method_exists($this->controller, $url[0])){
                    $this->method = $url[0];            //vymažeme prvú hodnotu
                } else {
                    $this->method = 'universal';        //priradíme $this->method hodnotu universal
                }
            }
                                                        //Žiadame o kód zodpovedného kontrolóra
            require_once 'app/controllers/'.$this->controller.'.php';
                                                        //Vytvorime inštanciu zodpovedného kontrolóra
            $this->controller = new $this->controller;
                                                        //Ak druhý prvok pola $url zodpovedá nejakej existujúcej metóde,
                                                        //a predtým ešte sme nezadali metódu, teda ona stále je index
            if (isset($url[1]) and $this->method == 'index'){
                if (method_exists($this->controller, $url[1])){
                    $this->method = $url[1];            //priradíme $this->method hodnotu druhého prvka polia $url
                    unset($url[1]);                     //vymažeme druhú hodnotu
                }
            } 
                                                        //Ak $url stále obsahuje nejaké hodnoty, dáme ich do polia $params
            $this->params = $url ? array_values($url) : [];
                                                        //Zavoláme kontrolór, metódu a odovzdáme jej parametre
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseUrl() {                    //Rozdelí url adresu s polia $_GET
            if (isset($_GET['url'])) {                  //do jednorozmerného polia
                $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
                return $url;
            }           
        }
    }
    