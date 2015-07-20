<?php
session_start();
echo "<pre>";
//print_r($_POST);
$l=$_POST['letter']; 
$p=$_POST['points']; 
$r=$_POST['rewards']; 

for ($i=1; $i < 17; $i++) { 
	$ruzzle[$i]['letter']=$l[$i];
	$ruzzle[$i]['points']=$p[$i];
	$ruzzle[$i]['rewards']=$r[$i];
	
}

//$postArray = (isset($_POST['postArray'])) ? $_POST['postArray'] : '';

//print "<pre />";
//include_once 'data.php';

$lab=file_get_contents("w1.txt");

$words=split("\n", $lab);

foreach($words as $key => $value) {
		$wordsList[$key]=strtolower($value);
}

//echo "<p>";
//print_r($wordsList);exit;
/*global $opArray;
global $dupArray;
global $totalWords;
global $correctwords;
global $dupArray;*/

$opArray=array();
$dupArray=array();
$totalWords=0;
$correctwords=0;
foreach ($ruzzle as $key => $value) {
	$str="";
	$words="";
	$str=$ruzzle[$key]['letter'];
	$results=getWords($key,$ruzzle,$wordsList,$totalWords,$correctwords);
}

//function getWords($key,$value,$ruzzle,$wordsList,$totalWords,$correctwords){
function getWords($key,$ruzzle,$wordsList,$totalWords,$correctwords){
	
	global $correctwords;
	global $totalWords;
	global $opArray;
	global $dupArray;
	global $keyArray;
	global $str;
	global $points;

	//$str.=$ruzzle[$key]['letter'];
	if(!in_array($key, $keyArray))
	{
		$keyArray[$key]=$key;		
	}

	$connectors=get_connecters($key);
	foreach ($connectors as $conKey => $conValue) {

		//$str=$ruzzle[$key]['letter']."".$ruzzle[$conValue]['letter'];
		//$str.=$ruzzle[$key]['letter']."".$ruzzle[$conValue]['letter'];
		if(!in_array($conValue, $keyArray))
		{
			$keyArray[$conValue]=$conValue;	
		}
		
		
		$str.=$ruzzle[$conValue]['letter'];	
		//echo "word ".$str ."<br />";
		
		if(in_array(strtolower($str), $wordsList))
		{
			if(!in_array(strtolower($str), $dupArray))
			{
				echo "match word ".$str ."<br />";
				$opArray[]=$str;
				$dupArray[]=strtolower($str);
				$correctwords++;
				//$str="";
				//if(!in_array($conValue, $keyArray))
				//{
					getWords($conValue,$ruzzle,$wordsList,$totalWords,$correctwords);
				//}	
			}


		}else{
			//getWords($conValue,$ruzzle,$wordsList,$totalWords,$correctwords);
		}




		$totalWords++;
	
	}
	$resultArray['correctwords']=$correctwords;
	$resultArray['totalWords']=$totalWords;
	$resultArray['opArray']=$opArray;
	return $resultArray;
}

echo "Total words : ".$results['totalWords']."<br />";
echo "Total correct words : ".$results['correctwords']."<br />";
$_SESSION["final_output"]=$results['opArray'];
print_r($results['opArray']);

//print_r($_SESSION['final_output']);

function get_connecters($key)
{

	/*$a=$key+1;
	$b=$key+5;
	$c=$key+4;
	$d=$key+3;
	$e=$key-1;
	$f=$key-5;
	$g=$key-4;
	$h=$key-3;*/


	$connectorArray=array(
					1 => array(2,5,6),
					2=>array(1,3,5,6,7),
					3=>array(2,4,6,7,8),
					4=>array(3,7,8),
					5=>array(1,2,6,9,10),
					6=>array(1,2,3,5,7,9,10,11),
					7=>array(2,3,4,6,8,10,11,12),
					8=>array(3,4,7,11,12),
					9=>array(5,6,10,13,14),
					10=>array(5,6,7,9,11,13,14,15),
					11=>array(6,7,8,10,12,14,15,16),
					12=>array(7,8,11,15,16),
					13=>array(9,10,14),
					14=>array(9,10,11,13,15),
					15=>array(10,11,12,14,16),
					16=>array(11,12,15)
				);


	return $connectorArray[$key];
}









?>


