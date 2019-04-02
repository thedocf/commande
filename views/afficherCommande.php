<?PHP
include "../core/CommandeC.php";
$cc1C=new CommandeC();
$listeCC=$cc1C->afficherListCC();

?>
<table border="1">
<tr>
<td>Id_com</td>
<td>Id_Panier</td>
<td>Etat</td>
<td>Methode</td>

</tr>

<?PHP
foreach($listeCC as $row){
	//if($_GET["id"] == $row['id']){
	?>
	<tr>

	<td><?PHP echo $row['id_com']; ?></td>
	<td><?PHP echo $row['id_panier']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><?PHP echo $row['methode']; ?></td>
	<td><form method="POST" action="AnnulerCommande.php">
	<input type="hidden" value="<?PHP echo $row['etat']; ?>" name="etat">
	<input type="hidden" value="<?PHP echo $row['id_com']; ?>" name="id_com">
	<input type="submit" name="annuler" value="annuler">
	</form>
	</td>
	</tr>
	<?PHP
//}
}
?>
</table>

<?php

if(isset($_GET["trait"]))
{
	if ($_GET["trait"] == 0) {
		echo '<script>alert("Commande deja traitée");</script>';
	}
}
?>
