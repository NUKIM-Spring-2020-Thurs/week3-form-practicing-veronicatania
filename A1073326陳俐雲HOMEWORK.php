<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php

$name=$_POST["name"];
$date = $_POST["date"];
$text = $_POST["text"];
$number = $_POST["number"];
$gender = $_POST["gender"];
$email = $_POST["email"];
//$Image = ;
$education = $_POST["education"];
$interest1 = $_POST["int1"];
$interest2 = $_POST["int2"];
$interest3 = $_POST["int3"];
$interest4 = $_POST["int4"];
$Comment =  $_POST["comment"];
$Other = $_POST["other"];

echo "Name 			: ".$name."<br/>";
echo "Birthday 		: ".$date."<br/>";
echo "Address 		: ".$text."<br/>";
echo "Phone Number 	: ".$number."<br/>";
echo "Gender 		: ".$gender."<br/>";
echo "E-mail 		: ".$email."<br/>";
echo "Education 	: ".$education."<br/>";

echo "Interests	:<br/>";
if($interest1!=NULL){
echo "".$interest1."<br/>";
}
if($interest2!=NULL){
echo "".$interest2."<br/>";
}
if($interest3!=NULL){
echo "".$interest3."<br/>";
}
if($interest4!=NULL){
echo "".$interest4."<br/>";
}
if($Other!=NULL){
echo "Other Interest: ".$Other."<br/>";
}

echo "<br/>Comment 		: ".$Comment."<br/>";

?>





