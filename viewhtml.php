<?php
$filePath = isset($_GET['image']) ? $_GET['image'] : '';

if (empty($filePath) || !file_exists($filePath) || !is_file($filePath)) {
    echo "Archivo no válido.";
    exit;
}

$htmlContent = file_get_contents($filePath);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contenido HTML</title>
</head>
<body>
    <h1>Código HTML del archivo</h1>
    <pre><?php echo htmlentities($htmlContent); ?></pre>
         <a href="view.php?image=<?=$filePath ?>" target"viewnormal3">Ver codigo cargado</a>
</body>
</html>