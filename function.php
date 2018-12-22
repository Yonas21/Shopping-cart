<?php
	
    function format($value){
    	echo "<pre>";
    	var_dump($value);
    	echo "</pre>";
    }

        function checkAge($value)
    {
    	if ($value > 18) {
    		echo "You are older";
    	} else {
    		echo "You are too Young";
    	}
    }
?>