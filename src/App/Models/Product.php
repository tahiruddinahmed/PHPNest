<?php

namespace App\Models;

use PDO;

class Product {

    public function getData() {
        $dsn = "mysql:host=localhost;dbname=learnsql;port=3306";

        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ];
            $pdo = new PDO($dsn, "TahirAhmed", "admin", $options);
        } catch (PDOException $e) {
            throw new Exception("Connection failed" . $e->getMessage());
        }

        // fetch all data from a table 
        $stmt = $pdo->query("SELECT * FROM person3");
        return $stmt->fetchAll();
    }
    
}
