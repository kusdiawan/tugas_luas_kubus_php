<?php
function pow_luas_kubus($rusuk, $pangkat){
	return pow($rusuk, $pangkat);
}

echo "<br> <h4>Tugas menghitung Luas Permukaan Kubus </h4>";
echo "<br> Luas permukaan kubus dengan rusuk 4 cm : ", pow_luas_kubus(4, 2) * 6 , " cm";  
echo "<br> Luas permukaan kubus dengan rusuk 7 cm : ", pow_luas_kubus(7, 2) * 6 , " cm";
echo "<br> Luas permukaan kubus dengan rusuk 10 cm : ", pow_luas_kubus(10, 2) * 6 , " cm";
echo "<br> Luas permukaan kubus dengan rusuk 12 cm : ", pow_luas_kubus(12, 2) * 6 , " cm"; 
?>