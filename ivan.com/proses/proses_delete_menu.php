<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "";
if(!empty ($_POST['input_menu_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_daftar_menu WHERE id='$id'");
    if ($query) {
        unlink("../assets/img/$foto");
        $message='<script>alert("Menu berhasil di hapus");
        window.location="../menu"</script>';
    } else {
        $message='<script>alert("Data gagal di hapus");
        window.location="../menu"</script>';
    }
}echo $message;
?>