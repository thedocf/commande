<?PHP
include "../core/CommandeC.php";
include "../entities/commande.php";


$cc=new CommandeC();
if (isset($_GET["id_com"]) and isset($_GET["etat"]) ){

	if ($_GET["etat"]==0)
	{
	$cc->modifierCC($_GET["id_com"]);
	}
}

header('Location: ../splite/AfficherBack.php');
?>