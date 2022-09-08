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
}