<?php 

//People Array - Get from teh DB

$people[] = "Brad";
$people[] = "Amanda";
$people[] = "Sam";
$people[] = "Judy";
$people[] = "Ken";
$people[] = "Kevin";
$people[] = "Rachel";
$people[] = "Harry";
$people[] = "Mike";
$people[] = "Leo";
$people[] = "Darcey";
$people[] = "Colt";
$people[] = "Maria";
$people[] = "Brenda";
$people[] = "Jane";
$people[] = "Summer";
$people[] = "Edwin";
$people[] = "Harper";
$people[] = "Ashley";
$people[] = "Cerina";
$people[] = "Desmond";
$people[] = "Isabella";
$people[] = "Luke";
$people[] = "Clause";
$people[] = "Rebecca";
$people[] = "Cathrine";
$people[] = "Elaina";
$people[] = "Bradford";

//get query string
$q = $_REQUEST['q'];

$suggestion = "";

//GET suggestions
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}
echo $suggestion === "" ? "No Suggestion":$suggestion;

?>