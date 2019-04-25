<?php
include "includes/header.php";

?>

<div class="content-container">
<div id="display_item">
<div class="card">
  <form action="addtocart.php?idUser=1" method="post">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1>
  <input type="hidden" name="prod" value="jeans">
  <p class="price">$19.99</p>
  <input type="hidden" name="price" value="19.99">
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <input type="hidden" name="idProduit" value="1">
  <input type="hidden" name="quantite" value="1">
  <input class="addto" type="submit" name="submit" value="add to cart">
   <input type="submit" name="add-to-wishlist" value="♥">
  </form>
  </div>

<div class="card">
  <form action="addtocart.php?idUser=1" method="post">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>produit1</h1>
  <input type="hidden" name="prod" value="produit1">
  <p class="price">$33.99</p>
  <input type="hidden" name="price" value="33.99">
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <input type="hidden" name="idProduit" value="2">
  <input type="hidden" name="quantite" value="1">
  <input class="addto" type="submit" name="submit" value="add to cart">
   <input type="submit" name="add-to-wishlist" value="♥">
  </form>
  </div>

<div class="card">
  <form action="addtocart.php?idUser=1" method="post">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>produit2</h1>
  <input type="hidden" name="prod" value="produit2">
  <p class="price">$103.99</p>
  <input type="hidden" name="price" value="103.99">
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <input type="hidden" name="idProduit" value="3">
  <input type="hidden" name="quantite" value="1">
  <input class="addto" type="submit" name="submit" value="add to cart">
  <input type="submit" name="add-to-wishlist" value="♥">
  </form>
  </div>

</div>
</div>

<?php
//include "includes/footer.php";
?>