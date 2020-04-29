<?php

class TestCheck extends Controller{
     
    public function startTest($test_name) {
      $test = $this->model("Test");
      $test->setName($test_name);
      $contents = $test->getContents();
      $this->view("home/test", $contents);       
     }
    
     public function finishTest($test_name) {
        $checker = $this->model("TestChecker");
        $checker->setValues($test_name, $_POST);
        $results = $checker->checkTest();
        $this->view("home/testResults", $results);    
     }
}