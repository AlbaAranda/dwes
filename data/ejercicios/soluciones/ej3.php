<?php

echo "Los número divisibles por 3 son: ";
for($numero=1; $numero<= 10; $numero++){
    if ($numero%3 == 0){
        echo $numero . "&nbsp";
    }
}