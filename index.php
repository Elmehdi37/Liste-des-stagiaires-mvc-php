<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Liste Des Stagiaires</title>
</head>
<body>
    <?php 
        try{
            $pdo = new PDO('mysql:dbname=ofppt;host=localhost','root','');
        }
        catch(Exception $e){    
            echo "Aucune connexion à la base de données n'est établie : " . $e->getMessage();
        }

        try{
            $sqlStatment = $pdo->prepare('SELECT * FROM stagiaire');
            $sqlStatment->execute();
            $stagiaires = $sqlStatment->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            echo "Il y a une erreur dans le processus de récupération des informations de la base de données : " . $e->getMessage();
        }
    ?>

    <div class="container mt-5">
        <h1>Liste Des Stagiaires</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Login</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php 
                    foreach($stagiaires as $stagiaire){
                        ?>
                            <tr>
                                <td scope="col"><?= $stagiaire->id ?></td>
                                <td scope="col"><?= $stagiaire->nom ?></td>
                                <td scope="col"><?= $stagiaire->prenom ?></td>
                                <td scope="col"><?= $stagiaire->age ?></td>
                                <td scope="col"><?= $stagiaire->login ?></td>
                                <td scope="col"><?= $stagiaire->password ?></td>
                            </tr>
                        <?php
                    }    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>