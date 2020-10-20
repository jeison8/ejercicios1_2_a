<?php 

$vectores = [];
for ($i=0; $i < 100 ; $i++) { 
	$vectores[$i] = rand(1,100000);
}

arsort($vectores);

$index = 1;
foreach ($vectores as $vector) {
	echo $index.'='.$vector;
	echo '<br>';
$index++;
}


 ?>