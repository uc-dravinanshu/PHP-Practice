<?php
   //get first question function.
   function get_first_question() {
      $file = file_get_contents("my-question.json");
      $array = json_decode($file, true);

      $response = array(
         "Content_id"=> $array[0]['content_id'],
         "Qestion"=>$array[0]['snippet'],
         "Options"=>$array[0]['content_text']['answers']
      );
      return $response;
   }
  echo get_first_question();

   //get next question function.
     function next_question () {
        $file = file_get_contents("my-question.json");
        $array = json_decode($file, true);

        $response = '';
            foreach($array as $row) {
                $Questions = json_decode($row['content_text'], true)['question'];
                // echo $Questions;
                $Answers = json_decode($row['content_text'],true)['answers'];
                // echo $Answers;
                foreach($Answers as $answer) {
                    $id =  $answer['id'];
                    $is_correct = $answer['is_correct'];
                    $ans = $answer['answer'];
                }
            }
        return $response;
       
     }
   
   //get previous function.
   function pre_question() {
    $file = file_get_contents("my-question.json");
    $array = json_decode($file, true);
 
    $response = '';
        foreach($array as $row) {
            $Questions = json_decode($row['content_text'], true)['question'];
            // echo $Questions;
            $Answers = json_decode($row['content_text'],true)['answers'];
            // echo $Answers;
            foreach($Answers as $answer) {
                $id =  $answer['id'];
                $is_correct = $answer['is_correct'];
                $ans = $answer['answer'];
            }
        }
    return $response;
   }
   //get selected question.
   function selected_question() {
    $file = file_get_contents("my-question.json");
    $array = json_decode($file, true);
 
    $response = '';
        foreach($array as $row) {
            $Questions = json_decode($row['content_text'], true)['question'];
            // echo $Questions;
            $Answers = json_decode($row['content_text'],true)['answers'];
            // echo $Answers;
            foreach($Answers as $answer) {
                $id =  $answer['id'];
                $is_correct = $answer['is_correct'];
                $ans = $answer['answer'];
            }
        }
        return $response;
    }
    
   //get All question.
   function all_question() {
    $file = file_get_contents("my-question.json");
    $array = json_decode($file, true);
 
    $response = '';
        foreach($array as $row) {
            $Questions = json_decode($row['content_text'], true)['question'];
            // echo $Questions;
            $Answers = json_decode($row['content_text'],true)['answers'];
            // echo $Answers;
            foreach($Answers as $answer) {
                $id =  $answer['id'];
                $is_correct = $answer['is_correct'];
                $ans = $answer['answer'];
            }
        }
        return $response;
    }


?>