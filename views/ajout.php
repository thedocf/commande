<HTML>
<head>
	<link rel="stylesheet" href="styles/style1.css">
	
</head>
<body>
	
<form method="POST" action="ajoutCC.php?id=1">
	<div id="card-success" class="hidden">
  <i class="fa fa-check"></i>
  <p>Payment Successful!</p>
</div> 
<div id="form-errors" class="hidden">
  <i class="fa fa-exclamation-triangle"></i>
  <p id="card-error">Card error</p>
</div>
<div id="form-container">
   
  <div id="card-front">
    <div id="shadow" ></div>

    <div id="image-container">
	   
	  
      <span id="amount">Ajout d'une  <strong>Carte credit</strong></span>
      <span id="card-image">
      
        </span>
    
    </div>

    <!--- end card image container --->

    <label for="card-number">
    	Numero de la carte
      </label>
    <input type="text" id="card-number" name="numcc" placeholder="1234 5678 9101 1112" minlength="14" maxlength="16" required>

   
    
    
    <div id="cardholder-container">
      <label for="card-holder">Nom
      </label>
      <input type="text" name="nom" id="card-nom" required />
      <label for="card-holder">Prenom
      </label>
      <input type="text" name="prenom" id="card-prenom" required />

    </div>
    <!--- end card holder container --->
    <div id="exp-container">
      <label for="card-exp">
          Date d'expiration
        </label>
        <?php
        $date = date('Y-m');
        ?>
      <input id="card-date" name="date" type="month" width="30%" min="<?php echo $date ?>" value="<?php echo $date ?>" length="6" required />
      
    </div>
	
        <div id="cvc-container">
      <label for="card-cvc"> CVC/CVV</label>
      <input id="card-cvc" name="cvv" placeholder="XXX-X" type="text" minlength="3" maxlength="4" required />
      <p>Dernier 3 or 4 chiffres</p>
    </div>
    <!--- end CVC container --->
    <!--- end exp container ---> 
  </div>
  <!--- end card front --->
  <div id="card-back">
    <div id="card-stripe">
    </div>

  </div>
  <!--- end card back --->
  <!--<input type="text" id="card-token" /> -->
  <button type="submit" value="ajouter" name="ajouter" id="card-btn">Submit</button>

</div>
<!--- end form container --->
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://use.fontawesome.com/f1e0bf0cbc.js"></script>
<script src="functions.js"></script> 
</body>
</HTMl>