<?php
    $conn = mysqli_connect("localhost", "root", "", "livros");

    if (mysqli_connect_errno())
    {
        printf('Falha na conexão: %s\n', mysqli_connect_error());
        exit(); // die();
    }
?>