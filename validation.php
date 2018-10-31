<?php

$a="01744821090";
if(strlen($a<5)){
	
	echo strlen($a<5);
}else{
	echo "large value";
}


if (preg_match('/^\d{11}$/', $a)) {
  echo "pass";
} else {
 echo "f";
}


echo "<hr/>";

$num = 245354;
echo $numlength = strlen((string)$num);
echo "<hr/>";

$num = 245354;
echo $numlength = mb_strlen($num);

echo "<hr/>";


 $num ='01744821090';
		// $find="017" or '018' or '015' or '016' or '019' or  '+88017' or  '+88016' or  '+88018' or  '+88019' or  '+88015';
		 $find="017"; 
			if( strlen($num)>9 and strlen($num)<15){
					$b=$num;
				}else{
					$a="<span style='color:red'>invalid number !! please input a valid number<span>";
				}
				
				
?>



<?php
// find an fixed word
echo "<hr/>";echo "<hr/>";echo "<hr/>";

$mystring = '01644821090';
$findme   = '017'or'016';

$pos = strpos($mystring, $findme);


if ($pos !== false) {
   echo "found";
} else {
     echo "The string '$findme' was not found in the string '$mystring'";
}
?>