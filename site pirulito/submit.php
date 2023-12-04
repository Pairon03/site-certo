<?php

    // Configurações de conexão com o banco de dados
    $connectionOptions = array(
        "Database" => "Cadastro",
        "Uid" => "your_username",
        "PWD" => "your_password"
    );
    
    // Cria conexão
    $conn = new mysqli ($servername, $username, $password, $dbname);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Cria a tabela 'cadastro'
    $sql = "CREATE TABLE cadastro (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        telefone VARCHAR(15) NOT NULL,
        cargo VARCHAR(30) NOT NULL,
        idade INT(3) NOT NULL,
        status VARCHAR(15) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'cadastro' criada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fecha conexão
    $conn->close();
?>