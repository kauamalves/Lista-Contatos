<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "kaua_agenda";

    try {

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

        // Ativar modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        // Erro na conexão

        $error = $e->getMessage();
        echo "Erro: $error";
    }
