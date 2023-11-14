<?php
function validate($valid, $errs){
		if(!array_filter($errs)){
    //$salutationErr == "" and $nameErr == "" and $preferenceErr == "" and $messageErr == "" and $emailErr == "" and $phoneErr == "" 
    //                    and $streetErr == "" and $houseErr == "" and $additionErr == "" and $zipcodeErr == "" and $residenceErr == ""){
	    $valid = true;
  }
  return($valid);
}
?>