<?php
function luas_segitiga($alas,$tinggi){
return 1/2 * $alas * $tinggi;
}
//pemanggilan fungsi
$a = 10;
$b = 15;
echo "Luas segitiga = ";
echo luas_segitiga($a,$b);
?>