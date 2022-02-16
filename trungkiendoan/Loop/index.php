<?php

$count_for_even = 0;
$count_for_odd = 0;

for($index = 0; $index <= 10; $index++){
    if($index % 2 == 0){
        $count_for_even++;
        echo "$count_for_even even! <br>";
    }
    else{
        $count_for_odd++;
        echo "$count_for_odd odd! <br>";
    }
}

echo "Finally result consist of $count_for_even even and $count_for_odd odd!";
?>