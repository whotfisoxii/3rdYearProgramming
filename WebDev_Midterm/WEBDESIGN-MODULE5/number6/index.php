<?php
$sort = array('Ren' => '23','Joven' => '26','Amelia' => '39','Mario' => '40');

arsort($sort);
echo"Ascending order according to the value.<br>";
foreach ($sort as $name => $age) {
	
	echo "$name : $age <br>";
}

echo"<br>";
arsort($sort);
echo"Descending order according to the value.<br>";
foreach ($sort as $name => $age) {
	
	echo "$name : $age <br>";
}

echo"<br>";
ksort($sort);
echo"Ascending order according to the key.<br>";
foreach ($sort as $name => $age) {
	
	echo "$name : $age <br>";
}

echo"<br>";
krsort($sort);
echo"Descending order according to the key.<br>";
foreach ($sort as $name => $age) {
	
	echo "$name : $age <br>";
}

?>