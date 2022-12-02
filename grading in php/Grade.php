<?php
$mark = $_GET["mark"];
echo "<h1> Student grade details </h1>";
if($mark <= 100 && $mark >= 91){
echo "Grade : O";
echo "<br>";
echo "Grade Point : 10";
}else if($mark <= 90 && $mark > 80){
echo "Grade : A+";
echo "<br>";
echo "Grade Point : 9";
}else if($mark <= 80 && $mark > 70){
echo "Grade : A";
echo "<br>";
echo "Grade Point : 8";
}else if($mark <= 70 && $mark > 60){
echo "Grade : B+";
echo "<br>";
echo "Grade Point : 7";
}else if($mark <= 60 && $mark > 50){
echo "Grade : B";
echo "<br>";
echo "Grade Point : 6";
}else if($mark < 50){
echo "Grade : RA";
echo "<br>";
echo "Grade Point : 0";
}
?>