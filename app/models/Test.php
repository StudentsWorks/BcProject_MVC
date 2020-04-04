
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
            $stmt = "SELECT test_id, test_type from tests where test_name = '$this->test_name'";
            $res = $this->db->query($stmt) or die($this->db->error);
            if(!$res) exit('No rows');
            while ($test = $res->fetch_assoc()){
                $test_id = $test["test_id"];
                $test_type = $test["test_type"];
            }
                     
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }       
        
        try {
            $stmt = "SELECT question_id, question, solution from solutions where test_id = '$test_id' order by question_id";
            $res = $this->db->query($stmt) or die($this->db->error);
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }

        $output = "<h1>".ucfirst($this->test_name)."</h1><br>"; 
        $output.= "<form action = '../finishTest/".$this->test_name."' method = 'POST'>";
        
        if ($test_type == "open") {
            while ($solution = $res->fetch_assoc()) {
                $output.= "<h3>".$solution["question"]."</h3>"."<input type = 'text' name = '".$solution["question_id"]." ' >";
            }        
        } else {
            //print "Multiple type<br>";
            
            try {
                $s = "SELECT options from options_bank where test_id = '$test_id'";
                $opt = $this->db->query($s) or die($this->db->error);
                $options = array();
                while ($option = $opt->fetch_assoc()) {
                    //print("Option: ");
                    //var_dump($option["options"]);
                    $temp =  json_decode($option["options"]);
                    //print "<br>Temp: ";
                    //var_dump($temp);
                    foreach ($temp as $val) {
                        
                        array_push($options, $val);
                    }
                }  
                //print "<br>Options: ";
                //var_dump($options);
            } catch (Exception $e){
                print "An error occured: ".$e->getMessage();
            }
            
            while ($solution = $res->fetch_assoc()) {
                $output.= "<h3>".$solution["question"]."</h3>";
                $question_options = array($solution["solution"]);
                //print "<br>Question options0: ";
                //var_dump($question_options);
                $k = 0;
                while (count($question_options) < 3){
                    //print "<br>Count: ".count($question_options);
                    $k++;
                    if ($k == 1000) break;
                    //print "<br>Entered while loop";
                    $randIndex = array_rand($options);
                    $option_to_push = $options[$randIndex];
                    if ( !in_array($option_to_push, $question_options)) {
                        array_push($question_options, $option_to_push);
                    }
                }
                //print "<br>Question options: ";
                //var_dump($question_options);

                $rendered_options = array();
                $k = 0;
                while (count($rendered_options) < 3) {
                    $k++;
                    if ($k == 1000) break;
                    $randIndex = array_rand($question_options);
                    $option_to_render = $question_options[$randIndex];
                    if ( !in_array($option_to_render, $rendered_options)) {
                        array_push($rendered_options, $option_to_render);
                        //print "<br>Option to render: ".$option_to_render;
                        $output.= "<label class='container'>".$option_to_render."<input type='radio' name = '".$solution["question_id"]."' value = '".$option_to_render."'>";
                        $output.="<span class='checkmark'></span></label>";
                    }
                    

                }
                //print "<br>Rendered options: ";
                //var_dump($rendered_options);
                $output.= "<label class='container'>Neviem<input type='radio' name = '".$solution["question_id"]."' value = 'neviem' >";
                $output.="<span class='checkmark'></span></label>";
            }
        } 


        $output.="<input type = 'submit'  value='Odovzdať'></form>";
        return $output;
    }
    

}