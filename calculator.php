<?php
// check if argument pass or not
if (count($argv) <= 1){ 
echo "Please pass valid arguments"; 
exit;
}

//if passed valid argument then sum the numbers
if($argv[1] === 'sum'|| $argv[1] === 'add'){
	if(isset($argv[2])){
		//take \n as number separator
		$numArr = explode(",", str_replace("n", ',', $argv[2]));
		//sum all value of array
		$result = array_sum($numArr);
	}else{
		$result = 0;
	}
}

echo $result;
?>
