<?php
$title = "Главная страница";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include '../header.php'; ?>

    <main class="container my-4">

        <!-- Hero-блок -->
        <section class="hero">
            <h1>Привет! Я Full-Stack Developer</h1>
            <p>Создаю красивые и интерактивные сайты для портфолио и бизнеса</p>
        </section>

        <!-- О себе -->
        <section id="about" class="container text-center">
            <h2>Обо мне</h2>
            <p>Я разрабатываю сайты с использованием C#, PHP, JS, AngularJS, React и современных фреймворков. Люблю чистый код и интересные анимации.</p>
        </section>

        <!-- Проекты -->
        <section id="projects" class="container cards">
            <div class="card project-card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Проект 1</h5>
                    <p class="card-text">Сайт для онлайн-магазина с корзиной и платежной системой, уведомлением через Telegram.</p>
                    <p class="technologies">
                        <span class="badge bg-primary">ASP Net Core MVC</span>
                        <span class="badge bg-primary">Blazor</span>
                        <span class="badge bg-primary">Ef Core</span>
                        <span class="badge bg-primary">MySql</span>
                        <span class="badge bg-primary">EntityFramework</span>
                    </p>
                    <a href="https://github.com/DanilKlec/OnlineMarket" target="_blank" class="btn btn-outline-primary btn-sm">Посмотреть</a>
                </div>
            </div>
            <div class="card project-card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Проект 2</h5>
                    <p class="card-text">Сайт для университета с новостной лентой и своим функционалом.</p>
                    <p class="technologies">
                        <span class="badge bg-primary">ASP Net Core MVC</span>
                        <span class="badge bg-primary">Blazor</span>
                        <span class="badge bg-primary">Ef Core</span>
                        <span class="badge bg-primary">MySql</span>
                        <span class="badge bg-primary">EntityFramework</span>
                    </p>
                    <a href="https://github.com/DanilKlec/NewsStore" target="_blank" class="btn btn-outline-primary btn-sm">Посмотреть</a>
                </div>
            </div>
            <div class="card project-card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Проект 1</h5>
                    <p class="card-text">JiraLight - кроссплатформенное приложение, пока реализация для Desktop.
                        Основная задача контроль своих задач и проектов.
                    </p>
                    <p class="technologies">
                        <span class="badge bg-primary">ASP Net Core MVC</span>
                        <span class="badge bg-primary">WPF</span>
                        <span class="badge bg-primary">MySql</span>
                        <span class="badge bg-primary">Avalonia</span>
                    </p>
                    <a href="https://github.com/DanilKlec/JiraLight" target="_blank" class="btn btn-outline-primary btn-sm">Посмотреть</a>
                </div>
            </div>
        </section>

        <!-- Контакты -->
        <section id="contact" class="container text-center">
            <h2>Контакты</h2>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/%D0%B4%D0%B0%D0%BD%D0%B8%D0%B8%D0%BB-%D0%BA%D0%BB%D0%B5%D1%86-a00982311?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">DanilKlec</a></p>
            <p>GitHub: <a href="https://github.com/DanilKlec" target="_blank">DanilKlec</a></p>
            <p>Email: <a href="mailto:danilklec@mail.com">danilklec@mail.com</a></p>
            <p>Telegram: <a href="https://t.me/danilklec" target="_blank">@danilklec</a></p>
        </section>

    </main>
    <footer class="bg-light text-center p-3 mt-auto">
        <p>&copy; <?php echo date("Y"); ?> Мой сайт</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/scripts/script.js"></script>
</body>

</html>