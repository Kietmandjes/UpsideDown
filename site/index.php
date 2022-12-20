<?php
require 'functions.php';

$conn = dbConnect();

$result = $conn->query("SELECT * FROM `interactiviteit1`")





?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/1cd743.avif">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/44df10ddff.js" crossorigin="anonymous"></script>
    <script src="js/main.js" defer></script>
    <title>Interactieve Golfbaan</title>
</head>

<body>
   <header class="header">
        <h1 class="header__h1">Interactieve Golfbaan </h1>
        <figure class="header__logo">
            <a href="https://the-upsidedown.com/"> <img class="header__logo--img" src="img/1cd743.avif" alt="logo Upside Down">
            </a>

        </figure>
    </header>
    <main class="main">
        <ul class="main__list">
            <?php foreach ($result as $interactiviteit) : ?>
                <li id="<?php echo $interactiviteit['nummerid']?>" class="main__list--item">
                    <a class="main__list--a" href="projecteer.php?id=<?php echo $interactiviteit['id'] ?>">
                        <img class="main__list--img" src="<?php echo $interactiviteit['img']; ?>" alt="">

                    </a>
                    <button class="main__list--button"><?php echo $interactiviteit['naam']; ?></button>
                </li>
            <?php endforeach; ?>
        </ul>
        <a class="button" href="#1"><i class="fa-solid fa-arrow-right"></i></a>
        <a class="button button--1" href="#2"><i class="fa-solid fa-arrow-right"></i></a>
        <a class="button button--2" href="#0"><i class="fa-solid fa-arrow-left"></i></a>
        <a class="button button--3" href="#3"><i class="fa-solid fa-arrow-left"></i></a>
    </main>
    <!--<footer class="footer">
        <p>
            <a class="footer__a" href="https://www.ma-web.nl/"> &#169; MediaCollege</a>
            |
            <a class="footer__a" href="https://www.ma-web.nl/">Hoofdsite</a>
        </p>
    </footer>-->
</body>

</html>