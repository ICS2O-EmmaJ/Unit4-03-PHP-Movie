<?php 

	// get the user input
  $input = floatval($_POST['age']);
  
  // determine the message based on the age. 
   
	if ($input > 18) {
    
    echo 'You can see an R rated movie alone.';
    
	}

  else if ($input > 13){
    
    echo 'You can see a PG-13 rated movie alone.';
    
  }

  else if ($input > 6){
    
    echo 'You can see a G rated movie alone.';
    
  }

  else ($input < 5) {
    
    echo 'You should not be seeing a movie alone.';
    
  } 
?>