<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './index.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="btn m-2" href="create.php" role="button">Ajouter Des Stagiaires</a>
        <a class="btn m-2" href="index.php" role="button">Liste Des Stagiaires</a>
    </nav>
    <div class="container mt-2 ">
        <h1><?= $title ?></h1>
        <?= $content ?>
    </div>
</html>