<?php
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
echo "Associative array : Ascending order sort by value "."<br>";
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value." "."<br>";
}
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
echo "Associative array : Ascending order sort by Key";
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value." "."<br>";
}
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
echo "Associative array : Descending order sorting by Value"."<br>";
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value." "."<br>";
}
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
"<br>";echo "Associative array : Descending order sorting by Key"."<br>";
echo("<br>");
echo "--------------------------------------------------";
echo("<br>");
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
    echo "Age of ".$y." is : ".$y_value." "."<br>";
} 
?>