<form action="Segi-Tiga.php" method="POST">
    <h1>Rumus Menghitung Luas Segi Tiga </h1>
    <p>Alas : </p>
    <input type= "number" name="alas" placeholder="Ex. 5" /><br>
    <p>Tinggi : </p>
    <input type= "number" name="tinggi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $alas = $_POST['alas']; 
        $tinggi = $_POST['tinggi'];

         // menghitung Luas Segi Tiga
        $luas = 1/2 * $alas * $tinggi;

        echo "Hasil hitung Luas Segi Tiga adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Maka Luas Segi Tiga adalah : $luas <br>";
     }