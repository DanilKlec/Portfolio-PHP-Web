<?php
$title = "О сайте";
?>
<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main class="container my-4">
        <section class="hero">
            <h1>О сайте</h1>
            <p>Данный сайт был разработан для портофолио на PHP + JS.</p>
        </section>
    </main>

    <footer class="bg-light text-center p-3 mt-auto">
        <p>&copy; <?php echo date("Y"); ?> Мой сайт</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
