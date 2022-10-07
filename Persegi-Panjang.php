<form action="Persegi-Panjang.php" method="POST">
    <h1>Rumus Menghitung Luas Persegi Panjang </h1>
    <p>Panjang : </p>
    <input type= "number" name="Panjang" placeholder="Ex. 5" /><br>
    <p>Lebar : </p>
    <input type= "number" name="lebar" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $Panjang = $_POST['Panjang']; 
        $tinggi = $_POST['lebar'];

         // menghitung Luas Persegi Panjang
        $luas = $Panjang * $lebar;

        echo "Hasil hitung Persegi Panjang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang : $Panjang <br>";
        echo "Tinggi : $lebar <br>";
        echo "Maka Luas Persegi Panjang adalah : $luas <br>";
     }