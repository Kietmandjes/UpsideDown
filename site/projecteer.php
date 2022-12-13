<?php
require 'functions.php';

$conn = dbConnect();

if (!isset($_GET['id'])) {
    echo ("de id is niet gezet");
    exit;
}


$id = $_GET['id'];

$check_int = filter_var($id, FILTER_VALIDATE_INT);
if ($check_int === false) {
    echo ("dit is geen getal");
    exit;
}






$statement = $conn->prepare("SELECT * FROM `interactiviteit` WHERE id= ?");
$params = [$id];


$statement->execute($params);

$place = $statement->fetch(PDO::FETCH_ASSOC);
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
    <script src="js/main.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo  $place['naam'] ?></title>
</head>
<body>

    <a class="imga" href="index.php">
        <img class="projectieImg" src="<?php echo  $place['img'] ?>" alt="Wandelpad in bos">
    </a>
</body>
</html>