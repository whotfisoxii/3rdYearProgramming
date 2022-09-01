<?php
$sort = array("53", "123", "1", "6", "3", "21", "12", "45", "145", "200", "54");
sort($sort);

$leng = count($sort);
for($x = 0; $x < $leng; $x++) {
  echo $sort[$x];
  echo "\n";
}
?>

