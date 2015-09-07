<?php

	$first_name = "Romil";
	$last_name = "Rõbtšenkov";

	//trükib välja
	echo $first_name." ".$last_name;

?>

<br>

<?php 
	
	$age = 5;
	
	// if( loogikatehe ){ tõene } else { väär }
	if($age < 18) {
		echo "alaealine";
	} else {
		echo "täisealine";
	}

?>

<br>

<?php 

    for($i = 0; $i < $age; $i = $i + 1) {
        // see, mida korratakse
        echo "palju".$i.", ";
    }
    
    echo "õnne";

?>
