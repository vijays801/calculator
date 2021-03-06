<?php
// check if argument pass or not
if (count($argv) <= 1){ 
$result = "Please pass valid arguments"; 
}

//if passed valid argument then sum the numbers
if($argv[1] === 'sum'|| $argv[1] === 'add' || $argv[1] === 'multiply'){
	if(isset($argv[2])){

		$numArr = explode("\\",$argv[2]);
		if(count($numArr) == 1){
			//take \n as number separator
			$numArr = explode(",", str_replace("n", ',', $argv[2]));
		}else{
			$numArr = explode($numArr[1], str_replace("n", ',', $numArr[2]));
		}

		$arr = array_filter($numArr, 'isnegative');
		if(count($arr)>0){
			$result = "Error: Negative numbers(".implode(",", $arr).") not allowed.";
		}else{
			$numArr = array_filter($numArr, 'isSmaller');

			if($argv[1] !== 'multiply'){
				//sum all value of array
				$result = array_sum($numArr);
			}else{
				//get product of all values of the array
				$result = array_product ($numArr);
			}
		}
	}else{
		$result = 0;
	}
}


echo $result;

//to check negative numbers
function isnegative($value){
    return is_numeric($value) && $value < 0;
}

//select number smaller than 1001
function isSmaller($value){
    return is_numeric($value) && $value < 1001;
}
?>
