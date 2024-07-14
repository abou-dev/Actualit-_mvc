<?php
require_once 'modele/dao/ArticleDao.php';
require_once 'modele/dao/CategorieDao.php';

class Controller {
    private $articleDao;
    private $categorieDao;

    public function __construct() {
        $this->articleDao = new ArticleDao();
        $this->categorieDao = new CategorieDao();
    }

    public function displayHome() {
        $categories = $this->categorieDao->getAllCategories();
        $articles = $this->articleDao->getAllArticles();
        include 'vue/inc/accueil.php';
    }

    public function displayArticlesByCategory($categoryId) {
        $categories = $this->categorieDao->getAllCategories();
        $articles = $this->articleDao->getArticlesByCategory($categoryId);
        include 'vue/inc/articleByCategorie.php';
    }
}
?>
