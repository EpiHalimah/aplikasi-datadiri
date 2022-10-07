<form action="Belah-Ketupat.php" method="POST">
    <h1>Rumus Menghitung Luas Belah Ketupat </h1>
    <p>Sisi : </p>
    <input type= "number" name="sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $sisi = $_POST["sisi"];

         // menghitung Luas Belah Ketupat
        $luas = $sisi* $sisi * $sisi* $sisi;

        echo "Hasil hitung Luas Belah Ketupat adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "sisi : $sisi <br>";
        echo "Maka Luas Belah Ketupat sama dengan [ $sisi x $sisi x $sisi x $sisi ] = $luas";
       

        
     }

