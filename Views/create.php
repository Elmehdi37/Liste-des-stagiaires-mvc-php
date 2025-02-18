<?php

    $title = 'Ajouter Des Stagiaires';

    ob_start()
?>
    <form action="store.php" method="post">
        <div class="mb-2">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-2">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="mb-2">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="mb-2">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Passaword</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
<?php 
    $content = ob_get_clean();
    include_once 'Views/layout.php'; 
?>