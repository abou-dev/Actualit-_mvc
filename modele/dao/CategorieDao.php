<?php
require_once 'ConnexionManager.php';
require_once 'modele/domaine/Categorie.php';

class CategorieDao {
    public function getAllCategories() {
        $conn = ConnexionManager::getConnexion();
        $stmt = $conn->query('SELECT * FROM Categorie');
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Categorie');
    }
}
?>
