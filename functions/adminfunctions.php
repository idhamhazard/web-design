<?php

include '../config/config.php';

class adminFunction
 {

    public function inputCategory($judul, $desc, $slug, $foto)
    {
        global $conn;
        $query = "INSERT INTO category (judul,description,slug,foto) VALUES ('$judul', '$desc', '$slug', '$foto')";
        $result = $conn->query($query);
    }

    public function readCategory()
    {
        global $conn;
        $query  = "SELECT * FROM category";
        $result = $conn->query($query);
        return $result;
    }

    public function deleteCategory($id)
    {
        global $conn;
        $query = "DELETE FROM category WHERE id = '$id'";
        $result = $conn->query($query);
    }

    public function readUser()
    {
        global $conn;
        $query = "SELECT * FROM user";
        $result = $conn->query($query);
        return $result;
    }

    public function deleteUser($id)
    {
        global $conn;
        $query = "DELETE FROM user WHERE id = '$id'";
        $result = $conn->query($query);
    }

    public function readResep()
    {
        global $conn;
        $query = "SELECT * FROM resep";
        $result = $conn->query($query);
        return $result;
    }

    public function deleteResep($id)
    {
        global $conn;
        $query = "DELETE FROM resep WHERE id = '$id'";
        $result = $conn->query($query);
    }



}





?>