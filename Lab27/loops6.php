<?php
$cities = ["Oswego","Syracuse","Albany","New York City","Buffalo","Rochestor"];
?>
<!DOCTYPE html><html><head><title>Loop 6 List</title></head>
<body><h1>Loop through a list</h1>
    <h2> A list of cities in NY</h2>
    <p> A list generated using a for a loop</p>
    <p>
          <ul>
             <?php
                 $num_items = count($cities);
                 echo "There are".$num_items."cities in our list";
                 echo"<br>";
                 for($i=0;$i<$num_items;$i++){
                 	echo "<li>$cities[$i]</li>";
                 }
              ?></ul></p></body></html>