<?php

    function connectionDataBase(){
        return new PDO('mysql:dbname=ofppt;host=localhost;','root','');
    }

    function listeStagiaire(){
        $connection = connectionDataBase();
        return $connection->query('SELECT * FROM stagiaire')->fetchAll(PDO::FETCH_OBJ);
    }

    function addStagiaire(){
        $connection = connectionDataBase();
        $stagiaires = $connection->prepare('INSERT INTO stagiaire (nom,prenom,age,login,password) value (?,?,?,?,?)'); 
        $stagiaires->execute([$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['login'],$_POST['password']]);
        return $stagiaires;
    }
    