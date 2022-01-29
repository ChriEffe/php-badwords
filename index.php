<?php 
$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.';
$badWord = $_GET["badWord"];
$censured = str_replace($badWord, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $text ?></h1>
    <h2>Lunghezza stringa: <?php echo strlen($text) ?></h2>
    <h1>Testo censurato: <?php echo ($censured) ?></h1>
    <h2>Lunghezza stringa: <?php echo strlen($censured) ?></h2>
</body>
</html>