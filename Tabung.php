<form action="Tabung.php" method="POST">
    <h1> Rumus Luas dan Volume Tabung </h1>
    <p> Jari Jari : </p>
    <input type="number" name="jari" placeholder="Ex. 5" /><br>
    <p> Tinggi : </p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Volume" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["jari"];
        $tinggi = $_POST["tinggi"];

         // menghitung volume dan Luas balok
        $Pi = 22/7;
        $luas = 2 * $Pi  * $jari * ($jari + $tinggi);
        $volume = $Pi * $jari * $jari * $tinggi;

        echo "Jari-Jari  : $jari <br>";
        echo "Tinggi  : $tinggi <br>";
        echo "Luas Tabung : $luas <br>";
        echo "Volume Tabung  : $volume <br>";
        echo "<hr>";
    }
?>