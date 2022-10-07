<form action="Balok.php" method="POST">
<h1>Rumus Menghitung Volume Balok </h1>
    <p>Panjang : </p>
    <input type= "number" name="panjang" placeholder="Ex. 5" /> <br>
    <p>Lebar : </p>
    <input type= "number" name="lebar" placeholder="Ex. 5" /> <br>
    <p>Tinggi : </p>
    <input type= "number" name="tinggi" placeholder="Ex. 5" /> 
    <input type="submit" name="proses" value="Hitung Luas"/>
</form>


<?php

     
     if(isset($_POST['proses'])){
        $panjang    =$_POST["panjang"];
        $lebar        =$_POST["lebar"];
        $tinggi        =$_POST["tinggi"];
       
        // menghitung volume balok
        $volume_balok    =$panjang*$lebar*$tinggi;
        
        echo "Hasil hitung volume balok adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Maka volume balok sama dengan [ $panjang x $lebar x $tinggi ] = $volume_balok";
    }
