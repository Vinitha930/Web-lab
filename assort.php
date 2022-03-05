<?php 

$students = array("vinitha", "rehna", "Asha", "Athira", "Akash", "Anisree", "Aswany","Athulya");
echo "<b>Normal Array : </b><br>";
print_r($students);
echo "<br><br> <b>Ascending Sort : </b><br>";
asort($students);
print_r($students);
echo "<br><br> <b>Descending Sort : </b><br>";
arsort($students);
print_r($students);

?>
