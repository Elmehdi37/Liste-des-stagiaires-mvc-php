<?php

    function connectionDataBase(){
        return new PDO('mysql:dbname=ofppt;host=localhost;','root','');
    }

    function listeStagiaire(){
        $connection = connectionDataBase();
        return $connection->query('SELECT * FROM stagiaire')->fetchAll(PDO::FETCH_OBJ);
    }