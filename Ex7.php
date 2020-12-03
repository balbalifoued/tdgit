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

$jourMois = array('Janvier'=>31,'Février' =>28, 'Mars'=>31, 'Avril'=> 30,'Mai' => 31, 'Juin' =>30, 'Juillet' => 31,'Août' =>31, 'Septembre'=> 30, 'Octobre' =>31,
'Novembre' =>30, 'Décembre'=> 31);

echo '<table> <tr><th>Mois </th>' ."\t";
echo '<th>Nombre de jours </th></tr>'."<br/>";
foreach($jourMois as $m => $nbJ)
echo'<tr> <td>'. $m . ' </td><td> '. $nbJ . " </td></tr>\n"; 
echo '</table>';

?>