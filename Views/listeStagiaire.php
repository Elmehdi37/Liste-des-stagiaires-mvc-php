<?php

    $title = 'Liste Des Stagiaires';

    ob_start()
?>

<a class="btn btn-primary m-2" href="create.php">Ajouter</a>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Age</th>
            <th scope="col">Login</th>
            <th scope="col">Password</th>
            <th scope="col">Operation</th>
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
                <td scope="col">
                    <a class="btn btn-success" href="#">Modifier</a>
                    <a class="btn btn-danger" href="#">Supprimer</a>
                </td>
            </tr>
        <?php }?>
    </tbody>

<?php 
    $content = ob_get_clean();
    include_once 'Views/layout.php'; 
?>