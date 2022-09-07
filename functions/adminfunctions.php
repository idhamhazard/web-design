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


}





?>