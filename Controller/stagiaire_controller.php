<?php
    require_once './Model/stagiaire_model.php';

    function indexAction(){
        $stagiaires = listeStagiaire();
        require_once './Views/listeStagiaire.php';
    }

    function createAction(){
        require_once './Views/create.php';
    }

    function storeAction(){
        $create = addStagiaire();
        if($create){
            header('location:index.php');
        }
        else {
            echo "Il y a un problème : aucun nouveau stagiaire n'a été ajouté";
        }
    }

    function editAction(){

    }

    function destroyAction(){

    }