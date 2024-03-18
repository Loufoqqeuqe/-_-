<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <style>
        body {
            font-family: Verdana Italic	, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #708090;
            padding: 20px 0;
            color: white;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        nav {
            margin-top: 20px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h1>Олимпиада школьников</h1>
        <nav>
            <?php if (!isset($_SESSION['userId'])): ?>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="contacts.php">Контакты</a>
                <a href="login.php">Вход</a>
                <a href="register.php">Регистрация</a>
            <?php elseif ($_SESSION['userRole'] === 'admin'): ?>
                <a href="index.php">Главная</a>
                <a href="admin_panel.php">Админ панель</a>
                <a href="logout.php">Выход</a>
            <?php else: ?>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="contacts.php">Контакты</a>
                <a href="orders.php">Заказы</a>
                <a href="profile.php">Профиль</a>
                <a href="logout.php">Выход</a>
            <?php endif; ?>
        </nav>
    </div>
</header>

    <div class="content">
        <div class="container">
            <div style="border: 2px solid #ccc; padding: 20px; border-radius: 10px;">
                <h2 style="font-size: 24px; color: #333; text-align: center; margin-bottom: 20px;">О нас</h2>
                Школьные олимпиады на территории нашей страны появились еще в XIX веке. Менялось время, менялись и акценты в системе образования. С 1930-х годов ежегодно проводились крупные олимпиады по математике, физике и химии, с 50–60-х к ним присоединились биология и лингвистика, в конце 60-х начала складываться могучая система всероссийских (в 70–80-е – всесоюзных) олимпиад. На рубеже 80-х возникли Турнир Городов и Турнир имени М. В. Ломоносова. А в 90-е годы в Россию пришел интернет и стало возможным собрать вместе информацию обо всех этих соревнованиях.

Первая страница о школьных олимпиадах была создана в 1998–99 годах по инициативе директора МЦНМО Ивана Валериевича Ященко и Алексея Кирилловича Кулыгина (olympiads.mccme.ru, на данный момент она представляет собой архив). И хотя эта страница поддерживалась Алексеем Кирилловичем практически в одиночку, долгое время она оставалась наиболее полным и оперативно обновляемым источником информации об олимпиадах для школьников в Москве. Но в те годы интернет был доступен далеко не для всех учащихся.

«Эта страница распечатывалась почти без всякой верстки в виде тонкой брошюры, издавалась тиражом 3000 экземпляров, и мы с коллегой за пару дней развозили на машине эти распечатки по округам Москвы для раздачи в школы, – рассказывал про работу в 1999-2000 годах Виталий Дмитриевич Арнольд, заместитель директора МЦНМО. – Нас самих удивляло и то, что потом эти брошюры мы видели на столе администрации многих школ, и то, что за 1-2 года к этому привыкли и стали относиться как к должному все в московском образовании – от учителей школ до самого высокого образовательного начальства».
            </div>
            <?php if (!isset($_SESSION['userId'])): ?>
                <p style="margin-top: 20px; font-size: 16px; line-height: 1.6; color: #555;">Чтобы увидеть результаты или расписание олимпиад, пожалуйста, <a href="login.php" style="color: #3498db; text-decoration: underline;">войдите</a> или <a href="register.php" style="color: #3498db; text-decoration: underline;">зарегистрируйтесь</a>.</p>
            <?php endif; ?>
        </div>
    </div>


</body>
</html>
