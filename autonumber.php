<?php
for ($i=0; $i<6; $i++) {
    $d=rand(1,5)%2;
    echo $d ? chr(rand(65,90)) : chr(rand(48,57));
}
?>
