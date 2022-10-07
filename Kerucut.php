<form action="Kerucut.php" method="POST">
    <h1> Rumus Menghitung Luas dan Volume Kerucut </h1>
    <p> Jari Jari : </p>
    <input type="number" name="kerucut_r" placeholder="Ex. 5" /><br>
    <p> Tinggi Kerucut : </p>
    <input type="number" name="kerucut_t" placeholder="Ex. 5" />
    <p> Panjang sisi Kerucut: </p>
    <input type="number" name="kerucut_s" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Volume" />
</form>
<?php
if(isset($_POST['proses'])){
	$kerucut_r = $_POST['kerucut_r'];
	$kerucut_s = $_POST['kerucut_s'];
	$kerucut_t = $_POST['kerucut_t'];
	
     // menghitung Luas dan volume Kerucut
	$phi = 3.14;
	$kerucut_luas_alas = $phi * $kerucut_r * $kerucut_r;
	$kerucut_luas_selimut = $phi * $kerucut_r * $kerucut_s;
	$kerucut_luas_permukaan = $kerucut_luas_alas + $kerucut_luas_selimut;
	$kerucut_volume = $kerucut_luas_alas * $kerucut_t / 3;
	
    echo "Diketahui;<br />";
	echo "<p>Luas alas = $kerucut_luas_alas</p>";
	echo "<p>Luas selimut = $kerucut_luas_selimut</p>";
	echo "<p>Luas permukaan = $kerucut_luas_permukaan</p>";
	echo "<p>Volume kerucut = $kerucut_volume</p>";
}
?>