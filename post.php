<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder= "Ex.Indra EL" />
    <input type="text" name="kelas" placeholder= "Ex. 11 RPL1" />
    <input type="text" name="NIS" placeholder= "Ex. 7859644" />
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $NIS = $_POST["NIS"];

        echo "Nama Lengkap : " . $namalengkap . "<br>";
        echo "Kelas : " . $kelas . "<br>";
        echo "NIS : " . $NIS;
    }
?>