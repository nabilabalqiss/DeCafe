<?php
session_start();
include "connet.php";
$kode_order = (isset($_POST['kode_order'])) ? htmlentities($_POST['kode_order']) : "";
$meja = (isset($_POST['meja'])) ? htmlentities($_POST['meja']) : "";
$pelanggan = (isset($_POST['pelanggan'])) ? htmlentities($_POST['pelanggan']) : "";

if (!empty($_POST['edit_order_validate'])) {
        $query = mysqli_query($conn, "UPDATE tb_order SET meja='$meja',pelanggan='$pelanggan' WHERE id_order = '$kode_order'");
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukan");
                        window.location="../order"</script>';
        } else {
            $message = '<script>alert("Data gagal dimasukan")
                        window.location="../order"</script>';
        }
}
echo $message;