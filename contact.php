<!DOCTYPE html>
<html>
<head>
<title>Webshop</title>
<link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>

<?php
$salutationErr = $nameErr = $preferenceErr = $messageErr = $emailErr = $phoneErr = $streetErr = $houseErr = $additionErr = $zipcodeErr = $residenceErr = "";
$salutation = $name = $preference = $message = $email = $phone = $street = $house = $addition = $zipcode = $residence = "";
$valid = false;

function test_input($data) {
  /*$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  */
  $data = $data;
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["salutation"])) {
    $salutationErr = "Aanhef is verplicht";
  } else {
    $salutation = test_input($_POST["salutation"]);
  }
	
  if (empty($_POST["name"])) {
    $nameErr = "Naam is verplicht";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["communicationpreference"])) {
    $preferenceErr = "Communicatievoorkeur is verplicht";
  } else {
    $preference = test_input($_POST["communicationpreference"]);
  }
  
  if (empty($_POST["message"])) {
    $messageErr = "Bericht is verplicht";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  
  if (empty($_POST["email"])) {
    if ($preference == "email"){
      $emailErr = "E-mailadres is verplicht";
	} else {
	  $email = test_input($_POST["email"]);
	}
  }
  
  if (empty($_POST["phone"])) {
    if ($preference == "phone"){
      $phoneErr = "Telefoon is verplicht";
	} else {
	  $phone = test_input($_POST["phone"]);
	}
  }
  
  if (empty($_POST["street"])) {
    if ($preference == "mail"){
      $streetErr = "Straat is verplicht";
	} 
    if (!empty($_POST["house"] )) {
	  $houseErr = "Vul a.u.b. straat in";
    }
	if (!empty($_POST["addition"] )) {
	  $additionErr = "Vul a.u.b. straat in";
    }
	if (!empty($_POST["zipcode"] )) {
	  $zipcodeErr = "Vul a.u.b. straat in";
    }
	if (!empty($_POST["residence"] )) {
	  $residenceErr = "Vul a.u.b. straat in";
    }
  } else {
	$street = test_input($_POST["street"]);
	if (empty($_POST["house"] )) {
	  $houseErr = "Vul a.u.b. huisnummer in";
    } else {
	  $house = test_input($_POST["house"]);
	}
	if (empty($_POST["zipcode"] )) {
	  $zipcodeErr = "Vul a.u.b. postcode in";
    } else {
	  $zipcode = test_input($_POST["zipcode"]);
	}
    if (empty($_POST["residence"] )) {
	  $residenceErr = "Vul a.u.b. woonplaats in";
    } else {
	  $residence = test_input($_POST["residence"]);
	}
	
  }
if ($salutationErr == "" and $nameErr == "" and $preferenceErr == "" and $messageErr == "" and $emailErr == "" and $phoneErr == "" 
  and $streetErr == "" and $houseErr == "" and $additionErr == "" and $zipcodeErr == "" and $residenceErr == ""){
	  $valid = true;
  }
}
?>
<div class="center">
<h1 class="title">
Contact
</h1>
<ul class="menu">
 <li><a href="index.html">HOME</a></li>
 <li><a href="about.html">ABOUT</a></li>
 <li><a href="contact.php">CONTACT</a></li>
</ul>
<?php if(!$valid){ ?>
 <form class="contact" method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="salutation">Aanhef:</label><br>
  <select type="select" id="salutation" name="salutation">
   <option value=""></option>
   <option value="Dhr." <?php if ($salutation == "Dhr."){echo 'selected = "selected"';}?>>Dhr.</option>
   <option value="Mvr." <?php if ($salutation == "Mvr."){echo 'selected = "selected"';}?>>Mvr.</option>
   <option value="Reiziger" <?php if ($salutation == "Reiziger"){echo 'selected = "selected"';}?>>Reiziger</option>
  </select>
  <span class="error"><?php echo $salutationErr;?></span><br>
  
  <label for="name">Naam:</label>
  <input type="text" id="name" name="name" value="<?php echo $name;?>"></input>
  <span class="error"><?php echo $nameErr;?></span><br>
  
  <label for="email">E-mailadres:</label>
  <input type="text" id="email" name="email" value="<?php echo $email;?>"></input>
  <span class="error"><?php echo $emailErr;?></span><br>
  
  <label for="phone">Telefoonnummer:</label>
  <input type="text" id="phone" name="phone" value="<?php echo $phone;?>"></input>
  <span class="error"><?php echo $phoneErr;?></span><br>
  
  <label for="street">Straat:</label>
  <input type="text" id="street" name="street" value="<?php echo $street;?>"></input>
  <span class="error"><?php echo $streetErr;?></span><br>
  
  <label for="house">Huisnummer:</label>
  <input type="number" id="house" name="house" value="<?php echo $house;?>"></input>
  <span class="error"><?php echo $houseErr;?></span><br>
  
  <label for="addition">Toevoeging:</label>
  <input type="text" id="addition" name="addition" value="<?php echo $addition;?>"></input>
  <span class="error"><?php echo $additionErr;?></span><br>
  
  <label for="zipcode">Postcode:</label>
  <input type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode;?>"></input>
  <span class="error"><?php echo $zipcodeErr;?></span><br>
  
  <label for="woonresidence">Woonplaats:</label>
  <input type="text" id="woonresidence" name="woonresidence" value="<?php echo $residence;?>"></input>
  <span class="error"><?php echo $residenceErr;?></span><br>
  
  <label for="communicationpreference">Communicatievoorkeur</label>
  <input type="radio" id="preference-email" name="communicationpreference" <?php if (isset($preference) && $preference=="email") echo "checked";?> value="email">
  <label for="preference-email">E-mail</label>
  <input type="radio" id="preference-phone" name="communicationpreference" <?php if (isset($preference) && $preference=="phone") echo "checked";?>value="phone">
  <label for="preference-phone">Telefoon</label>
  <input type="radio" id="preference-mail" name="communicationpreference" <?php if (isset($preference) && $preference=="mail") echo "checked";?> value="mail">
  <label for="preference-mail">Post</label>
  <span class="error"><?php echo $preferenceErr;?></span><br>
  
  <label for="message">Waar wilt u contact over opnemen?</label>
  <textarea name="message" rows="10" cols="30"></textarea>
  <span class="error"><?php echo $messageErr;?></span><br>
  
  <input type="submit" value="Submit">
 </form>
 
<?php }else{ 

 echo "Bedankt voor uw bericht";
 
 } ?>

<footer>&copy 2023 Rogier Be</footer>

</div>
</body>
</html> 
