<?php 

	// get the user input
  $input = floatval($_POST['age']);

  // declare constant

  define(FIRST_THRESHOLD, 18);
  define(SECOND_THRESHOLD, 13);
  define(THIRD_THRESHOLD, 12);

  // determine the message based on the age. 
   
	if ($input >= FIRST_THRESHOLD) {
    
    echo 'You can see an R rated movie alone.';
    
	}

  else if ($input >= SECOND_THRESHOLD){
    
    echo 'You can see a PG-13 rated movie alone.';
    
  }

  else if ($input >= THIRD_THRESHOLD){
    
    echo 'You can see a G rated movie alone.';
    
  }


  else {
    
    echo 'You should not be seeing a movie alone. You need parental supervision.';
    
  } 
?>
