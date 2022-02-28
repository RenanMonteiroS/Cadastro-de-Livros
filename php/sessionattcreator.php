<?php

    $_SESSION["isbn"] = $_POST["isbn"];
    $_SESSION["titulo"] = $_POST["titulo"];
    $_SESSION["autor"] = $_POST["autor"];
    $_SESSION["categoria"] = $_POST["categoria"];

    $isbn = $_SESSION["isbn"];
    $titulo = $_SESSION["titulo"];
    $autor = $_SESSION["autor"];
    $categoria = $_SESSION["categoria"];
?>