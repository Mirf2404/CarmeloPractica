<?php

    require('classes/Request.php');
    
    
    $html = Request::request('html');
    $path_parts= pathinfo($html);
    $name = substr($pathParts['basename'], 15);

    
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
<body>
    <h1><?= $name ?></h1>
 <p></p>
</body>
</html>


