<html><head>
<style>
      table, th, td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head><body>
<?php
    $tab=array("Balbali"=>array("prenom"=>"Safouen","ville"=>"Nabeul","age"=>22),
    "Ben Mahmoud"=>array("prenom"=>"Ali","ville"=>"Tunis","age"=>22),
    "Krouna"=>array("prenom"=>"Moez","ville"=>"Djerba","age"=>20));
    /*$tab2=["Balbali"=>["prenom"=>"Safouen","ville"=>"Nabeul","age"=>22],
    "Ben Mahmoud"=>["prenom"=>"Ali","ville"=>"Tunis","age"=>22],
    "Krouna"=>["prenom"=>"Moez","ville"=>"Djerba","age"=>20]];
    print_r($tab2);
    echo"<br>";
    print_r("-----------------------------------------");
    echo"<br>"; */
$i=1; 
//echo "<table>";

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
    echo "<br>"." $val, ";
    echo '</td>';echo '</td>';
}
    echo '</tr>'; 
}
    echo '</table>';
?>
</body></html> 
