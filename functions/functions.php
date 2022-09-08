<?php
include 'config.php';
class allFunction 
{
    public function readCategory()
    {
        global $conn;
        $query = "SELECT * FROM category";
        $result = $conn->query($query);
        return $result;
    }

    public function readProduct() 
    {
        global $conn;
        $query = "SELECT * FROM product WHERE category = '$id'";
        $result = $conn->query($query);
        return $result;
    }

    public function createQuestion($email, $box) 
    {
        global $conn;
        $query = "INSERT INTO question (email, box) VALUES ('$email', '$box')";
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