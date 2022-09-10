<?php 
include '../functions/userfunctions.php';
$action = $_GET['action'];

if($action == "create") {
{
        $id_user = $_POST['id_user'];
        $judul = $_POST['judul'];
        $slug = $_POST['slug'];
        $cat = $_POST['category'];
        $desc = $_POST['deskripsi'];
        $alat = $_POST['alat'];
        $langkah = $_POST['langkah'];
        $submit = $_POST['submit'];
        $foto = $_FILES['foto']['tmp_name'];
        $nama_foto = $_FILES['foto']['name'];
        $directory = "../assets/upload/";
        $move = move_uploaded_file($foto, $directory . $nama_foto);
    
        if($foto === false || $foto){
            if($move) {
                $library = new userFunction();
                $library->createResep($id_user, $judul, $slug, $cat, $desc, $alat, $langkah, $nama_foto);
                header("location:dashboard.php");
            } 
        }
    }
}