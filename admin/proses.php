<?php 
include '../functions/adminfunctions.php';
$action = $_GET['action'];


if($action == "create")
{
    $judul = $_POST['judul'];
    $desc = $_POST['dekripsi'];
    $slug = $_POST['slug'];
    $foto = $_FILES['gambar']['tmp_name'];
    $nama_foto = $_FILES['gambar']['name'];
    $directory = "../assets/upload/";
    $move = move_uploaded_file($foto, $directory.$nama_foto);

    if($move) {
        $library = new adminFunction();
        $library->inputCategory($judul,$desc,$slug,$nama_foto);
        header("location:category.php");
    }
}

if($action == "delete") 
{
    $function = new adminFunction();
    $delete = $function->deleteCategory($_GET['id']);
    header("location:category.php");
}

if($action == "del-user") 
{
    $function = new adminFunction();
    $delete = $function->deleteUser($_GET['id']);
    header("location:user.php");
}

if($action == "del-resep") 
{
    $function = new adminFunction();
    $delete = $function->deleteResep($_GET['id']);
    header("location:resep.php");
}