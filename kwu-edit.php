<?php
    if ( isset($_GET["kode_barang"]) ){
        $kode_barang = $_GET["kode_barang"];
        $check_kode_barang = "SELECT * FROM transaksi WHERE kode_barang = '$kode_barang'; ";
        include('./kwu-config.php');
        $query = mysqli_query($mysqli,$check_kode_barang );
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit Data</h1>
<form action="kwu-edit.php" method="POST"> 
    <label for="kode_barang">Kode Barang :</label><br>
    <input value="<?php echo $row["kode_barang"]; ?>" type="text" name="kode_barang" readonly/><br>

    <label for="tanggal">Tanggal :</label><br>
    <input value="<?php echo $row["tanggal"];?>" type="date" name="tanggal" /><br>

    <label for="pembeli">Pembeli :</label><br>
    <input  value="<?php echo $row["pembeli"];?>" type="text" name="pembeli" /> <br>

    <label for="nama_barang" >Nama Barang:</label><br>
    <input  value="<?php echo $row["nama_barang"];?>" type="text" name= "nama_barang" /><br><br>

    <label for="qty" >QTY:</label><br>
    <input  value="<?php echo $row["qty"];?>"type="number" name= "qty" /><br><br>

    <label for="harga_beli" >Harga Beli:</label><br>
    <input  value="<?php echo $row["harga_beli"];?>"type="number" name= "harga_beli" /><br><br>

    <label for="hargajual" > Harga Jual</label><br>
    <input  value="<?php echo $row["harga_jual"];?>"type="number" name= "harga_jual" /><br><br>

    <input type="submit" name= "simpan" value="Simpan Data"/>
    <a href="kwu.php"> Kembali </a>
</form>


<?php
     if( isset($_POST["simpan"])){
        $kode_barang= $_POST["kode_barang"];
        $pembeli= $_POST["pembeli"];
        $tanggal= $_POST["tanggal"];
        $nama_barang= $_POST["nama_barang"];
        $qty= $_POST["qty"];
        $harga_beli= $_POST["harga_beli"];
        $harga_jual= $_POST["harga_jual"];

        //UPDATE - Memperbarui Data
        $query = "
                UPDATE transaksi SET tanggal  = '$tanggal',
                pembeli = '$pembeli',
                nama_barang = '$nama_barang',
                qty = '$qty',
                harga_beli = '$harga_beli',
                harga_jual = '$harga_jual'
                WHERE kode_barang = '$kode_barang';
        ";

        include ('./kwu-config.php');
        $UPDATE = mysqli_query($mysqli, $query);

        if($UPDATE){
            echo "
            <script>
            alert('Data Berhasil Diperbaharui');
            window.location= 'kwu.php';
            </script>
            ";
        }else{
            echo"
            <script>
            alert('Data gagal,');
            window.location= 'kwu-edit.php?kode_barang=$kode_barang';
            </script>
            ";
        }
    }
?>