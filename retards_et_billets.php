<?php

$idretard = $_SESSION['idr'];   /*???*/

$idetudiant = $_SESSION['ide'];

$lEtudiant = $unControleur->selectWhereEtudiant($idetudiant);

$leRetard = $unControleur->selectWhereRetard($idretard);
 
$lesRetards = $unControleur->selectAllRetards ($idretard); 

require_once ("vue/vue_retards_billets.php"); 
?>