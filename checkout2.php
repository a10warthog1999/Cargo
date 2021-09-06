
<html>
    <head>
	      <title>cargo</title>
	                       <link rel="stylesheet" href="check.css">
	                       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
 

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
   <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
	                       
	                       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	                      <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
                           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
                           <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
                           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                           
                           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                          
                          
                           <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                           
                           <meta charset="utf-8">
                           <meta name="viewport" content="width=device-width, initial-scale=1">
                          
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                          
                           <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
 

    </head>
<body>
	<section>
	<ul class="payment-types">
  
  <li class="paymenttype selected cc">
    <div class="box">
    <header>
      <div class="card" id="cc-card">
        <div class="flipper">
          <div class="front">
            <div class="shine"></div>
            <div class="shadow"></div>
             <div class="card-bg">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/cc-front-bg.png" />
            </div>
            <div class="card-content">
              <div class="credit-card-type"></div>
              <div class="card-number">
                <span>1234 1234 1234 1234</span>
                <span>1234 1234 1234 1234</span>
              </div>
              <div class="card-holder">
                <em>Card holder</em>
                <span>Your Name</span>
                <span>Your Name</span>
              </div>
              <div class="validuntil">
                <em>Expire</em>
                <div class="e-month">
                    <span>
                      MM
                    </span>
                    <span>
                      MM
                    </span>
                </div>
                <div class="e-divider">
                     <span>
                      /
                    </span>
                    <span>
                      /
                    </span>
                </div>
                <div class="e-year">
                    <span>
                      YY
                    </span>
                    <span>
                      YY
                    </span>
                </div>
                
              </div>
            </div>
          </div>

        
    </header>

    <form method="POST"action="checkout.php">
	<a href="cargo.php">Back</a>
      <div class="form-content">
        <div class="field">
          <input type="text" name="cno"id="cardnumber" maxlength="20" required/>
          
          <label for="cardnumber">Card number</label>
        </div>
        <div class="field">
          <input type="text" autocorrect="off" spellcheck="false" id="cardholder" maxlength="25" name="cho"required/>
          
          <label for="cardholder">Card holder (Name on card)</label>
        </div>
        <div class="field-group">
          
            <label for="expires-month">Expire (Valid until)</label>   
            <div class="field expire-date">
              <div>
                <input type="tel" id="expires-month" placeholder="MM" allowed-pattern="[0-9]" maxlength="2"name="exp"required>
               
              </div>
              <div class="divider">/</div>
              <div>
                <input type="tel" id="expires-year" placeholder="YY" allowed-pattern="[0-9]" maxlength="2"name="expy"required>
                
              </div>
            </div>
          
         
            <div class="field ccv">
              <input type="tel" name="ccv" autocomplete="off" maxlength="3"required />
              
              <label for="ccv">CCV</label>
            </div>
          </div>
        
        <button type="submit"name="sub" onclick="document.getElementById('id01')"><span>Pay</span></button>
      </div>
    </form>
    </div>
  </li>
  
</ul>
</section>

<?php
  if(isset($_POST['sub']))
  {
  	 $ccv=$_POST['ccv'];
            $exp=$_POST['exp'];
            $expy=$_POST['expy'];
            $cho=$_POST['cho'];
            $cno=$_POST['cno'];
		
          print(" <div class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>Some text. Some text. Some text.</p>
        <p>Some text. Some text. Some text.</p>
      </div>
    </div>
  </div>");
		  
		 
		  
          }

?>



</body>
</html>