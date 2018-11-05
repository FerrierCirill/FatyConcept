<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	$req = "UPDATE produit SET nom_prod = ? WHERE id_prod = ?";
	$traitement  = $connect ->prepare($req);
	$traitement -> bindParam(1, $_GET['value']);
	$traitement -> bindParam(2, $_GET['id']);
	$traitement -> execute();
	$count = $traitement -> rowCount();

	if($count =='0'){
	    echo $traitement;
	}
	else{
	    echo "OK";
	}
}
?>