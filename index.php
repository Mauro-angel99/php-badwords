<?php

$my_string = 'Tokyo è una città eclettica, unincredibile mix di palazzi imperiali, santuari, templi, ma anche quartieri all avanguardia ricchi di grattacieli enormi. ';

echo $my_string;

echo strlen($my_string);


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
    <div>
        <form action="index.php" method="GET">
            <input type="text" name="word">
            <button type="submit">censura</button>
        </form>
    </div>
    
</body>
</html>



<?php 

$word = $_GET['word'];

$my_string_replaced = str_replace($word, '***', $my_string);

echo $my_string_replaced;

echo strlen($my_string_replaced);


?>
