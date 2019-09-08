<?php

echo "<table>";

for($x=1;$x<=5;$x++){

    echo "<tr>";

    for($y=1;$y<=5;$y++){
        echo "<td>".$x*$y."<td>";
    }
}

echo "</table>";

?>