<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles par Catégorie</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <section>
            <?php if (count($articles) > 0): ?>
                <?php foreach ($articles as $article): ?>
                    <article>
                        <h2><?php echo htmlspecialchars($article->titre); ?></h2>
                        <p><?php echo htmlspecialchars($article->contenu); ?></p>
                        <p>Publié le <?php echo htmlspecialchars($article->dateCreation); ?></p>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun article trouvé pour cette catégorie.</p>
            <?php endif; ?>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
