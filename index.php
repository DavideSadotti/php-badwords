<?php
    $badWord = $_GET["badWord"];  
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing $badWord, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim $badWord, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    $badWordReplaced = str_replace($badWord, "***", $text);
    $lunghezza = strlen($text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <p><?php echo $badWordReplaced; ?></p>
    <p><?php echo "il paragrafo è lungo: $lunghezza caratteri!"?></p>  
</body>
</html>