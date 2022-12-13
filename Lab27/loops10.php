<?php
echo "ternary operator <br>";
for($row=1;<=11;$row++){
    for($col=1;$col<=($row>5?12 - $row:$row);$col++){
        echo "@";
    }//End of inner loop
    echo "<br>";
}//End of outer loop


?>

