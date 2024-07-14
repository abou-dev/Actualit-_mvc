<?php
require_once 'ConnexionManager.php';
require_once 'modele/domaine/Article.php';

class ArticleDao {
    public function getArticlesByCategory($categoryId) {
        $conn = ConnexionManager::getConnexion();
        $stmt = $conn->prepare('SELECT * FROM Article WHERE categorie_id = :category_id');
        $stmt->execute(['category_id' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Article');
    }

    public function getAllArticles() {
        $conn = ConnexionManager::getConnexion();
        $stmt = $conn->query('SELECT * FROM Article');
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Article');
    }
}
?>
