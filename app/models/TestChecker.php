<?php
require_once __DIR__."/../dbConnection.php";

class  TestChecker {
    
    public function __construct()
    {        
        $this->db = OpenCon();
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function setValues($test_name, $user_answers){

        $this->test_name = $test_name;
        $this->user_answers = $user_answers;
    }

    public function clearData($data) {
        $syn = array(",", ",", "?", ")", "(", "[", "]", "@", "!", ";", ":", "=", "+");
        $data = str_replace($syn, "", $data);
        return htmlentities(strtolower(trim(preg_replace('/\s+/', ' ', $data))));
    }

    public function checkTest() {

        try {
         $stmt = "SELECT question_id, question, solution from solutions where test_name = $this->test_name order by question_id";
         $res = $this->db->query($stmt) or die($this->db->error);
        } catch (Exception $e){
            print "An error occured: ".$e->getMessage();
        }

        $output = "<center><h1>".ucfirst($this->test_name)."</h1><br></center>";
        $correct = 0;
        $total = 0;
        while ($solution = $res->fetch_assoc()) {
            $total ++;
            $answ_key = $solution["question_id"]."_";
            $output.= "<h4>Otazka: ".$solution["question"]."</h4>";

            $cleanAnswer = $this->clearData($this->user_answers[$answ_key]);
            $cleanAnswer1 = $this->clearData($this->user_answers[$solution["question_id"]]);
            $sim = similar_text($cleanAnswer, $solution["solution"], $perc);
            $sim1 = similar_text($cleanAnswer1, $solution["solution"], $perc1);

            if ($perc > 70) {
                $correct ++;
                $output.= "<h6>Spravne :) </h6>";
                $output.= "Vašá odpoved: ".$this->user_answers[$answ_key]."<br><br>";
            }else if ($perc1 > 70) {
                $correct++;
                $output.= "<h6>Spravne :) </h6>";
                $output.= "Vašá odpoved: ".$this->user_answers[$solution["question_id"]]."<br><br>";
            } else {
                $output.= "<h6>Chyba:( </h6>";
                $output.= "Spravná odpoved: ".$solution["solution"]."<br>".$perc." ".$perc1;
                $output.= "Vašá odpoved: ".$this->user_answers[$answ_key].$this->user_answers[$solution["question_id"]]."<br><br>";
            }       
        }
        $output.="<h3>Uspešnosť: $correct/$total</h3>";

        return $output;
    }

 }
