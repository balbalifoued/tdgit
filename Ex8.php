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
$k=0;
$dicoMois = array("January"=>'Janvier','February'=>'Février','March'=>'Mars',
            'April'=>'Avril','May'=>'Mai','June'=>'Juin','July'=>'Juillet',
            'August'=>'Aout','September'=>'Septembre','October'=>'Octobre',
            'November'=>'Novembre','December'=>'Décembre');
echo "<table>";
echo "<tr><th>Anglais </th><th><font color=blue> Français</th></tr>";
foreach($dicoMois as $k => $myValue) 
{
    print "<tr><td> $k </td><td><font color=blue> $myValue </td></tr></font>";
}
echo "</table>";
?>