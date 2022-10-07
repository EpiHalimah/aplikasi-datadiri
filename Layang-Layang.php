<form action="Layang-Layang.php" method="POST">
    <h1>Rumus Menghitung Luas Layang Layang </h1>
    <p>Diagonal 1 : </p>
    <input type= "number" name="Diagonal1" placeholder="Ex. 5" />
    <p>Diagonal 2 : </p>
    <input type= "number" name="Diagonal2" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>

<?php
     if (isset($_POST["proses"]) ){
        echo "<hr>";
        $Diagonal1 = $_POST['Diagonal1']; 
        $Diagonal2 = $_POST['Diagonal2']; 

         // menghitung Luas Layang Layang
        $luas = 1/2 * $Diagonal1 * $Diagonal2;

        echo "Hasil hitung Luas Layang Layang adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Diagonal 1 : $Diagonal1 <br>";
        echo "Diagonal 2 : $Diagonal2 <br>";
        echo "Luas Layang Layang = ".$luas." cm<sup>2</sup><br/>";
     }