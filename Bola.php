<form action="Bola.php" method="POST">
    <h1> Rumus Luas dan Volume Bola </h1>
    <p>Jari - Jari :</p>
    <input type="number" name="r" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Volume" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["r"];
        $pi = 22/7;
        $x = 4/3;
        $LP = 4 * $pi * $jari * $jari;
        $volume = $x * $pi * $jari * $jari * $jari;

        echo "Jari - jari : $jari <br>";
        echo "Luas Permukaan Bola : $LP <br>";
        echo "Volume Bola : $volume <br>";
    }
?>