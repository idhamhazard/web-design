<?php

include 'config.php';
class userFunction
{
    public function readCategory()
    {
        global $conn;
        $query = "SELECT * FROM category";
        $result = $conn->query($query);
        return $result;
    }

    public function createResep($id_user, $judul, $slug, $category, $desc, $alat, $langkah, $foto)
    {
        global $conn;
        $query = "INSERT INTO resep (id_user, judul, slug, category, description, alat, langkah, foto) 
        VALUES ('$id_user', '$judul', '$slug', '$category', '$desc', '$alat', '$langkah', '$foto' )";
        $result = $conn->query($query);
    }

    public function getSLugActive($slug)
    {
        global $conn;
        $query = "SELECT * FROM category WHERE slug = '$slug'";
        $result = $conn->query($query);
        return $result;
    }

    public function getResepByCat($category_id)
    {
        global $conn;
        $query = "SELECT * FROM resep WHERE category = '$category_id'";
        $result = $conn->query($query);
        return $result;
    }

    public function viewResep($slug)
    {
        global $conn;
        $query = "SELECT * FROM resep WHERE slug = '$slug'";
        $result = $conn->query($query);
        return $result;
    }
}