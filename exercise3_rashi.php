<?php
echo "<h1> Exercise 3 - rashi </h1> ";

?>
<?php
echo "<h3>task 1 </h3>";
$d = date("F");
if ($d == "August"){
    echo "It's August, so it's still holiday. <br>";
    echo "***************************";
}
else {
    echo "Not August, This is . $d . so i don't have any holidays <br>";
}

?>
<?php
echo "<h3>task 2 </h3>";
$color = "red";
if ($color == "red"){
    echo "The color is red. <br>";
    
}
else {
    echo "The color is not red. <br>";
}


?>
<?php
echo "<h3>task 3</h3>";
$marks = 400;
$result = $marks/5;
if($result>= 80){
    echo "your grade is EXCELLENT!";
}
elseif($result>= 70 && $result<80){
    echo "your grade is GREAT!";
}
elseif($result>= 60 && $result<70){
    echo "your grade is GOOD!";
}
elseif($result>= 50 && $result<60){
    echo "you PASSED!";
}
else{
    echo "you FAILED!";
}

?>