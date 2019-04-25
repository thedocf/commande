<?php
include_once "../config.php";

/**
 * 
 */
class WishListC
{

function ajouterProduitToWishList($wishList)
{
	$sql="insert into wishList (idUser,idProduit) values ( :idUser,:idProduit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idUser=$wishList->getidUser();
        $idProduit=$wishList->getidProduit();


		$req->bindValue(':idUser',$idUser);
		$req->bindValue(':idProduit',$idProduit);	
           $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function totalProductInWishList($idUser)
{

	$total=0;
		$sql="SELECT * from wishlist where idUser=$idUser";
		$db = config::getConnexion();
		
		$liste1=$db->query($sql);
	foreach($liste1 as $row)
	{
		$total=$total+1;
	}

return $total;


}

function existanceProduitDansWishList($idProduit)
{
	$exist=0;
		$sql="SELECT * from wishlist";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach($liste as $row)
		{
			if ($row['idProduit'] == $idProduit)
			{
				$exist =1;		
			}
		}
		return $exist;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

function fetchProductDetails($idProduit)
{
$sql="SELECT * from product where id=$idProduit";
$db = config::getConnexion();
$stmt = $db->prepare($sql); 
$stmt->execute(); 
$row = $stmt->fetch();
return $row;
}

}
?>
