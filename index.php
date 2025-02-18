<?php

    try{
        $connection = new PDO('mysql:dbname=ofppt;host=localhost;','root','');
    }
    catch(Exception $e){
        echo "Il y a une erreur de communication avec la base de données : " . $e->getMessage();
    }

    $title = 'Liste Des Stagiaires';

    try{
        $stagiaires = $connection->prepare('SELECT * FROM stagiaire');
        $stagiaires->execute();
        $stagiaires = $stagiaires->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e){
        echo "Il y a une erreur dans l'opération SELECT dans la base de données : " . $e->getMessage();
    }
    ob_start()
?>

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
    <tbody>
        <?php foreach($stagiaires as $stagiaire){ ?>
            <tr>
                <td scope="col"><?= $stagiaire->id       ?></td>
                <td scope="col"><?= $stagiaire->nom      ?></td>
                <td scope="col"><?= $stagiaire->prenom   ?></td>
                <td scope="col"><?= $stagiaire->age      ?></td>
                <td scope="col"><?= $stagiaire->login    ?></td>
                <td scope="col"><?= $stagiaire->password ?></td>
            </tr>
        <?php }?>
    </tbody>

<?php 
    $content = ob_get_clean();
    include_once 'Views/layout.php'; 
?>