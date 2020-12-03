<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
    $tot_temp += $temp; //total des températures
}
    $avg_high_temp = $tot_temp/$temp_array_length;// moyenne des températures division du total par le nombres des températures
  
    echo "Average Temperature is : ".$avg_high_temp.""; //Affichage de la moyenne
    echo("<br>");
echo "---------------------------------------------------------------------";
echo("<br>");
sort($temp_array);// trier le tableau des températures
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)// parcourir du début à la fin du tableau des températures
{ 
    echo $temp_array[$i].", "; // récupérer les 5 températures en premiers les moins élevés
}
echo("<br>");
echo "---------------------------------------------------------------------";
echo("<br>");
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)  // parcourir de la fin au début du tableau des températures
{
    echo $temp_array[$i].", ";// récupérer les 5 températures en derniers les plus élevés
}
echo("<br>");
echo "---------------------------------------------------------------------";
echo("<br>");
?>