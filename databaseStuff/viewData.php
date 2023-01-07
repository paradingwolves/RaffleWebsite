<?php

require_once('connectvars.php');
require_once('connection.php');


$result = $conn->query('SELECT * FROM Entries');

$array = array();
while ($row = $result->fetch_assoc()) {
  $array[] = $row;
}


$result->free();
$conn->close();

$entryArray = array();

foreach ($array as $row) {
    while($row['tickets'] > 0) {
        echo $row['name'];
        echo "   ";
        echo $row['email'];
        $newEntry = $row['name']."     ".$row['email'];
        $entryArray[] =  $newEntry;
        echo "<br>";
        $row['tickets'] -= 1;
    }
}
/* print_r($entryArray); */
$key = "Name";
$value = array_rand($entryArray);


echo "Booze Draw Winner: $key => $entryArray[$value]";
  
  
?>