<?php
// check if argument pass or not
if (count($argv) <= 1){ 
echo "Please pass valid arguments"; 
exit;
}

//if passed valid argument then sum the numbers
if($argv[1] === 'sum'|| $argv[1] === 'add'){
	if(isset($argv[2])){
		$numArr = explode(",", $argv[2]);
		$result = array_sum($numArr);
	}else{
		$result = 0;
	}
	
}

echo $result;
?>
