<?php
    require_once './Model/stagiaire_model.php';

    function listeStagiairesAction(){
        $stagiaires = listeStagiaire();
        require_once './Views/listeStagiaire.php';
    }