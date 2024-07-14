<header>
    <nav>
        <ul>
            <?php foreach ($categories as $category): ?>
                <li><a href="?action=category&category_id=<?php echo $category->id; ?>"><?php echo htmlspecialchars($category->libelle); ?></a></li>
            <?php endforeach; ?>
            <li><a href="?action=home">Toutes les catégories</a></li>
        </ul>
    </nav>
</header>
