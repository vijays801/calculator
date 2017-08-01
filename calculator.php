<?php
// check if argument pass or not
if (count($argv) <= 1){ 
$result = "Please pass valid arguments"; 
}

//if passed valid argument then sum the numbers
if($argv[1] === 'sum'|| $argv[1] === 'add'){
	if(isset($argv[2])){

		$numArr = explode("\\",$argv[2]);
		if(count($numArr) == 1){
			//take \n as number separator
			$numArr = explode(",", str_replace("n", ',', $argv[2]));
		}else{
			$numArr = explode($numArr[1], str_replace("n", ',', $numArr[2]));
		}
		//sum all value of array
		$result = array_sum($numArr);
	}else{
		$result = 0;
	}
}

echo $result;
?>
