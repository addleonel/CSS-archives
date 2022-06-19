<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="container">
        <h1>Bienvenido a la pagina</h1>   
        <p>Nombre: <?php echo $_GET["name"];?></p>
        <p>Apellido:  <?php echo $_GET["surname"];?></p>
        <p>Email:  <?php echo $_GET["email"];?></p>
        <p>Fecha de nacimiento:  <?php echo $_GET["date"];?></p>
        <p>Genero:  <?php echo $_GET["gender"];?></p>
    </div>
</body>
</html>