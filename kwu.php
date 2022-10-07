<?php
     include('./kwu-config.php');
     echo "<a href='kwu-tambah.php'>Tambah Data</a>";
     echo "<hr>";
     $no = 1;
     $tabledata="";
     $data = mysqli_query($mysqli," SELECT * FROM transaksi ");
     while($row = mysqli_fetch_array($data)){
        
        $totalharga_beli= 
            $row["qty"] *
            $row["harga_beli"];

        $totalharga_jual= 
            $row["qty"] *
            $row["harga_jual"];

        $laba= $totalharga_jual - $totalharga_beli;
        
        $persentase=   (
            $laba /
            $totalharga_beli) * 100;
        
        $tabledata .= "
            <tr>
                <td>".$row["kode_barang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["nama_barang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["harga_beli"]."</td>
                <td>".$row["harga_jual"]."</td>
                <td>$totalharga_beli</td>
                <td>$totalharga_jual</td>
                <td>$laba</td>
                <td>$persentase %</td>
                <td>
                    <a href='kwu-edit.php?kode_barang=".$row["kode_barang"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='kwu-hapus.php?kode_barang=".$row["kode_barang"]."' 
                              onclick='return confirm(\"certo che vuoi eliminare ?\");'>Hapus</a>
                </td>
            <tr>
            ";
            $no++;
     }

     echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>Kode Barang</th>
                <th>Tanggal</th>
                <th>Pembeli</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Total Harga Beli</th>
                <th>Total Harga Jual</th>
                <th>Laba</th>
                <th>Persentase Laba</th>
                <th>Aksi</th>
                </tr>
            $tabledata
        </table>
     ";
?>