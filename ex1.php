<html><head>
<style>
      table, th, td, tr {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head><body>
<?php
$tab=array("Balbali"=>array("Safouen","Nabeul",21),"Ben Mahmoud"=>array("Ali","Tunis",22),"Krouna"=>array("Moez","Djerba",20));
print_r($tab);
$i=1;
foreach($tab as $cle=>$valeur)
{
   echo '<tr>';
   echo '<td>';
   echo"<br>"."Nom $i : $cle ";
 $i++;
 
foreach($valeur as $ind=>$val)
{ 
    echo '<td>';   
    echo "<br>"."$ind : ", $val, "";
    echo '</td>';
    echo '</td>';
}
    echo '</tr>';
}
    echo '</table>';
    $i=1; 
//echo "<table>";
echo("<br>");
 echo("<br>");
echo "-------------------------Utilisation du CSS et de la balise Table--------------------------------------------";
echo("<br>");
echo("<br>");
    echo '<table border:1px solid black>';
    echo "<tr><th>Nom </th><th><font color=blue> Prénom</th><th><font color=blue> Ville</th><th><font color=blue> âge</th></tr> ";
   
 foreach($tab as $cle=>$valeur)
{
    
  echo '<tr>';
   echo '<td>';
   echo"<br>"."$i : $cle ";
  
 $i++;

foreach($valeur as $ind=>$val)
{ 
   
    echo '<td>';   
    //echo "<br>"."$ind : ", $val, "";
    echo "<br>"." $val ";
    echo '</td>';echo '</td>';
}
    echo '</tr>'; 
}
    echo '</table>';
?>

