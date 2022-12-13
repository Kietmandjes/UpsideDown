<?php
require 'functions.php';

$conn = dbConnect();

$result = $conn -> query("SELECT * FROM `interactiviteit`")





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
    <script src="js/main.js" defer></script>
    <title>Interactieve Golfbaan</title>
</head>

<body>
    <header class="header">
        <h1 class="header__h1">Interactieve Golfbaan </h1>
        <figure class="header__logo">
            <a href="index.html"> <img class="header__logo--img" src="img/1cd743.avif" alt="logo Upside Down">
            </a>

        </figure>
    </header>
    <main class="main">
        <form class="form" action="">
            <label class="form__label" for="js--naam">Naam</label>
            <input class="form__inputnaam" id="js--naam" type="text">
            <label for="js--keuzes">Ik houd van:</label>
            <div class="checkboxes">
                <input class="checkboxes__input" type="checkbox" id="js--grouw" value="grouw"><label class="checkboxes__label" for="js--grouw">Grouw</label></input>
                <input class="checkboxes__input" type="checkbox" id="js--warmte" value="warmte"><label class="checkboxes__label" for="js--warmte">warmte</label></input>
                <input class="checkboxes__input" type="checkbox" id="js--kou" value="kou"><label class="checkboxes__label" for="js--kou">Kou</label></input>
                <input class="checkboxes__input" type="checkbox" id="js--eten" value="eten"><label class="checkboxes__label" for="js--eten">Eten</label></input>
                <input class="checkboxes__input" type="checkbox" id="js--zee" value="zee"><label class="checkboxes__label" for="js--zee">Zee</label></input>
                <input class="checkboxes__input" type="checkbox" id="js--natuur" value="natuur"><label class="checkboxes__label" for="js--natuur">Natuur</label></input>
            </div>

        </form>
        <ul class="main__list">
            <?php foreach ($result as $interactiviteit) : ?>
                <li class="main__list--item">
                    <a href="projecteer.php?id=<?php echo $interactiviteit['id'] ?>">
                        <img class="main__list--img" src="<?php echo $interactiviteit['img']; ?>" alt="">

                    </a>

                    <button class="main__list--button"><?php echo $interactiviteit['naam']; ?></button>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer class="footer">
        <p> &#169; MediaCollege </p>
    </footer>
</body>

</html>