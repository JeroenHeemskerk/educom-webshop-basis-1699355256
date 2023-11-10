  
   
<html>
<?php
//First, the functions are all defined. 
  function getRequestedPage(){
    if ($_SERVER["REQUEST_METHOD"] == "POST")
	  {
	    init();
      makeErr();
      validate();
      return('contact')
	  } else {
      setpage();
    }    
  }
  
  function init(){
		$salutationErr = $nameErr = $preferenceErr = $messageErr = $emailErr = $phoneErr = $streetErr = $houseErr = $additionErr = $zipcodeErr = $residenceErr = "";
        $salutation = $name = $preference = $message = $email = $phone = $street = $house = $addition = $zipcode = $residence = "";
        $valid = false;
	}
  
	function makeErr(){
		if (empty($_POST["salutation"])) {
			$salutationErr = "Aanhef is verplicht";
		} else {
			$salutation = $_POST["salutation"];
		}
			
		if (empty($_POST["name"])) {
			$nameErr = "Naam is verplicht";
		} else {
			$name = $_POST["name"];
		}
		  
		if (empty($_POST["communicationpreference"])) {
			$preferenceErr = "Communicatievoorkeur is verplicht";
		} else {
			$preference = $_POST["communicationpreference"];
		}
		  
		if (empty($_POST["message"])) {
			$messageErr = "Bericht is verplicht";
		} else {
			$message = $_POST["message"];
		}
		  
		  
		if (empty($_POST["email"])) {
			if ($preference == "email"){
			  $emailErr = "E-mailadres is verplicht";
			} else {
			  $email = $_POST["email"];
			}
		}
		  
		if (empty($_POST["phone"])) {
			if ($preference == "phone"){
			  $phoneErr = "Telefoon is verplicht";
			} else {
			  $phone = $_POST["phone"];
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
			$street = $_POST["street"];
			if (empty($_POST["house"] )) {
			  $houseErr = "Vul a.u.b. huisnummer in";
			} else {
			  $house = $_POST["house"];
			}
			if (empty($_POST["zipcode"] )) {
			  $zipcodeErr = "Vul a.u.b. postcode in";
			} else {
			  $zipcode = $_POST["zipcode"];
			}
			if (empty($_POST["residence"] )) {
			  $residenceErr = "Vul a.u.b. woonplaats in";
			} else {
			  $residence = $_POST["residence"];
			}
		}
	function validate(){
		if($salutationErr == "" and $nameErr == "" and $preferenceErr == "" and $messageErr == "" and $emailErr == "" and $phoneErr == "" 
                        and $streetErr == "" and $houseErr == "" and $additionErr == "" and $zipcodeErr == "" and $residenceErr == ""){
	    $valid = true;
  }


  function showResponsePage(){
    showDocumentstart;
    showHead;
    showBody;
    showDocumentEnd;
  }
  
    function showDocumentStart(){
      echo '<!DOCTYPE html>'.'<html>';
    }
  
    function showHead(){
      startTagHead;
      showTitle;
      setStyle;
      endTagHead;
    }
    
      function startTagHead(){
        echo '<head>';
      }
      
      function showTitle(){
        switch($page){
          case 'home':
            echo '<title>Home</title>';
            break;
          case 'about':
            echo '<title>About</title>';
            break;
          case 'contact':
            echo '<title>Contact</title>';
            break;
          case '404':
            echo '<title>404</title>';
            break;
      }
      
      function setStyle(){
        echo '<link rel="stylesheet" href="CSS/stylesheet.css">';
      }
      
      function endTagHead(){
        echo '</head>'
      }
    
    function showBody(){
      bodyStart;
      showHeader;
      showMenu;
      showContent;
      showFooter;
      bodyEnd;
    }
    
      function bodyStart(){
        echo '<body>'.'<div class="center">';
      }
      
      function showHeader(){
      switch ($page){
        case 'home':
          echo '<h1 class="title">Home</h1>';
        case 'about': 
          echo '<h1 class="title">About</h1>';
        case 'contact':
          echo '<h1 class="title">Contact</h1>';
        case '404':
          echo '<h1 class="title">Error 404:</h1>';
      }
      
      function showMenu(){
        echo '<ul class="menu">';
        echo '<li><a href="index.php">HOME</a></li>';
        echo '<li><a href="about.php">ABOUT</a></li>';
        echo '<li><a href="contact.php">CONTACT</a></li>';
        echo '</ul>';
      }
      
      function showContent(){
        switch($page){
          case 'home':
            showHomeContent;
            break;
          case 'about':
            showAboutContent;
            break;
          case 'contact':
            showContactContent;
            break;
          case '404':
            show404Content;
            break;
      }
      
        function showHomeContent(){
          echo '<p class="textstyle">Welkom op de homepagina van mijn webshop.</p>';
        }
        
        function showAboutContent(){
          showFirstParagraph;
          showSecondParagraph;
          showHobbies;
        }
        
          function showFirstParagraph(){
            echo '<p class="textstyle">Ik ben Rogier. Ik kom uit Gouda en ik heb gestudeerd in Groningen.</p>';
          }
          
          function showSecondParagraph(){
            echo '<p class="textstyle">Ik heb twee zussen en een kat.<br>Mijn hobby\'s zijn:</p>';
          }
          
          function showHobbies(){
            echo '<ul class="about"><li>Schaken</li> <li>Tennissen</li> <li>Piano spelen</li><li>Basgitaar spelen</li></ul>';
          }
        
        function showContactContent(){
          //Yet to be done
        }
        
        function show404Content(){
          echo '<h3 class="textstyle">This page could not be found.</h3>';
        }
      
      function showFooter(){
        echo '<footer>&copy 2023 Rogier Be</footer>';
      }
      
      function bodyEnd(){
        echo '</div>'.'</body>'
      }
    
    function showDocumentEnd(){
      echo '</html>'
    }

  function init(){
		$salutationErr = $nameErr = $preferenceErr = $messageErr = $emailErr = $phoneErr = $streetErr = $houseErr = $additionErr = $zipcodeErr = $residenceErr = "";
        $salutation = $name = $preference = $message = $email = $phone = $street = $house = $addition = $zipcode = $residence = "";
        $valid = false;
	}
  
	function makeErr(){
		if (empty($_POST["salutation"])) {
			$salutationErr = "Aanhef is verplicht";
		} else {
			$salutation = $_POST["salutation"];
		}
			
		if (empty($_POST["name"])) {
			$nameErr = "Naam is verplicht";
		} else {
			$name = $_POST["name"];
		}
		  
		if (empty($_POST["communicationpreference"])) {
			$preferenceErr = "Communicatievoorkeur is verplicht";
		} else {
			$preference = $_POST["communicationpreference"];
		}
		  
		if (empty($_POST["message"])) {
			$messageErr = "Bericht is verplicht";
		} else {
			$message = $_POST["message"];
		}
		  
		  
		if (empty($_POST["email"])) {
			if ($preference == "email"){
			  $emailErr = "E-mailadres is verplicht";
			} else {
			  $email = $_POST["email"];
			}
		}
		  
		if (empty($_POST["phone"])) {
			if ($preference == "phone"){
			  $phoneErr = "Telefoon is verplicht";
			} else {
			  $phone = $_POST["phone"];
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
			$street = $_POST["street"];
			if (empty($_POST["house"] )) {
			  $houseErr = "Vul a.u.b. huisnummer in";
			} else {
			  $house = $_POST["house"];
			}
			if (empty($_POST["zipcode"] )) {
			  $zipcodeErr = "Vul a.u.b. postcode in";
			} else {
			  $zipcode = $_POST["zipcode"];
			}
			if (empty($_POST["residence"] )) {
			  $residenceErr = "Vul a.u.b. woonplaats in";
			} else {
			  $residence = $_POST["residence"];
			}
		}
	function validate(){
		if($salutationErr == "" and $nameErr == "" and $preferenceErr == "" and $messageErr == "" and $emailErr == "" and $phoneErr == "" 
                        and $streetErr == "" and $houseErr == "" and $additionErr == "" and $zipcodeErr == "" and $residenceErr == ""){
	    $valid = true;
  }
	}
  
      $page = getRequestedPage();
      showResponsePage($page);
	}
  ?>
</body>
</html>