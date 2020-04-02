<?php
require_once __DIR__."/../dbConnection.php";

class Test {

    public function __construct()
    {
        $this->db = OpenCon();
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function setName($test_name){
        $this->test_name = $test_name;
    }

    public function getContents() {
        try {
            $stmt = "SELECT test_id from tests where test_name = \"$this->test_name\"";
            $res = $this->db->query($stmt) or die($this->db->error);
            $test_id = $res->fetch_row()[0];
            if(!$test_id) exit('No rows');         
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }       
        
        try {
            $stmt = "SELECT question_id, question from solutions where test_id = \"$test_id\" order by question_id";
            $res = $this->db->query($stmt) or die($this->db->error);
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }
        
        $output = "<h1>".ucfirst($this->test_name)."</h1><br>"; 
        $output.= "<form action = '../finishTest/".$this->test_name."' method = 'POST'>";

        while ($solution = $res->fetch_assoc()) {
            $output.= "<h3>".$solution["question"]."</h3>"."<input type = 'text' name = '".$solution["question_id"]." ' >";
        }
        $output.="<input type = 'submit'  value='Odovzdať'></form>";
        return $output;
    }
    

}