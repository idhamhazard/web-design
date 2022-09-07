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
}