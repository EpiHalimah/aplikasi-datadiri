<form action="Lingkaran.php" method="POST">
    <h1>Rumus Menghitung Luas lingkaran </h1>
    <p>Jari Jari : </p>
    <input type= "number" name="JariJari" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $JariJari = $_POST['JariJari']; 

         // menghitung Luas Lingkaran
        $luas = 3.14 * $JariJari;

        echo "Hasil hitung Luas Lingkaran adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Jari Jari : $JariJari <br>";
        echo "Maka Luas Lingkaran adalah : $luas <br>";
     }