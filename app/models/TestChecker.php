<?php
require_once __DIR__."/../dbConnection.php";

class  TestChecker {
    
    public function __construct()
    {        
        $this->db = OpenCon();
        //echo "TestChecker was initialized<br>";
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function setValues($test_name, $user_answers){
        //echo "TestChecker is setting values<br>";
        $this->test_name = $test_name;
        $this->user_answers = $user_answers;
    }

    public function checkTest() {
        try {
            $stmt = "SELECT test_id from tests where test_name = \"$this->test_name\"";
            $res = $this->db->query($stmt) or die($this->db->error);
            $test_id = $res->fetch_row()[0];
            if(!$test_id) exit('No rows');         
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }       
        
        try {
            $stmt = "SELECT question_id, question, solution from solutions where test_id = \"$test_id\" order by question_id";
            $res = $this->db->query($stmt) or die($this->db->error);
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }

        $output = "<center><h1>".ucfirst($this->test_name)."</h1><br></center>";
        while ($solution = $res->fetch_assoc()) {
            $answ_key = $solution["question_id"]."_";
            $output.= "<h4>Otazka: ".$solution["question"]."</h4>";
            if ($this->user_answers[$answ_key] == $solution["solution"]){        
                $output.= "<h6>Spravne :) </h6>";
            } else {
                $output.= "<h6>Chyba:( </h6>";
                $output.= "Spravná odpoved: ".$solution["solution"]."<br>";
            }
            $output.= "Vašá odpoved: ".$this->user_answers[$answ_key]."<br><br>";
            
        }

        return $output;
        
    }

    
}
