<?php
	/**
	* Given an array of n size with a value of a random 
	* number between x and y, create a function that will calculate
	* the average of those values, and get the highest and lowest numbers.
	*
	* @author Mario Cuba <mario@mariocuba.net>
	*/
	
	// first, initialize an example
	$amount = 15;	// how many elements will the array have?
	$low	= 2;	// the lowest possible element
	$high	= 138;	// the highest possible element
	
	// fill the array...
	for ($x = 0; $x < $amount; $x++) {
		$array[$x] = mt_rand($low, $high); // with a random number between $low and $high
	}
	
	/**
	* Returns the average of the values of an array, the
	* highest and the lowest number inside of it.
	*
	* @param	array	- the array to iterate through
	* @return	array	- the highest, lowest, and average values
	*/
	function array_max_min_avg($array) {	
		// initialize variables
		$result	= array();
		$amount = count($array);
		$avg	= 0;
		
		// examine each array item
		for ($x = 0; $x < $amount; $x++) {
			// if no low number, set it
			if (!isset($low)) {
				$low = $array[$x];
			
			// if there's a low number, compare and assign if necessary
			} elseif ($array[$x] < $low) {
				$low = $array[$x];
			}
			
			// same for the highest number
			if (!isset($high)) {
				$high = $array[$x];
			} elseif ($array[$x] > $high) {
				$high = $array[$x];
			}
			
			// sum all the values		
			$avg = $avg + $array[$x];
		}
		
		// calculate the average
		$avg = $avg / $amount;
		
		// return the result
		return array(
			'high'	=> $high,
			'low'	=> $low,
			'avg'	=> $avg
		);
	}

	// test
	print_r(array_max_min_avg($array));

?>