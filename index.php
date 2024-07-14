<?php
require_once 'controleur/Controller.php';

$controller = new Controller();

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'category':
        $category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : 0;
        $controller->displayArticlesByCategory($category_id);
        break;
    case 'home':
    default:
        $controller->displayHome();
        break;
}
?>
