<?php
session_name("infoPessoal");

session_start();

setcookie(session_name(),session_id(),time()+86400,"/");


require("coneccao.php");



if($_POST["aux"] == 1)
{
    require("sessionattcreator.php");



    $sql = "INSERT INTO livro (ISBN, autor, titulo, categoria) VALUES ('" . $isbn ."','" . $titulo . "','" . $autor . "','" . $categoria.  "')";
    if (mysqli_query($conn, $sql)):
        echo "Dados inseridos com sucesso!";
        header('Location: ../apresentacao.php');
    
    endif;
}

else if($_POST["aux"] == 2)
{
    require("sessioncliente.php");
    require("verificadorexiste.php");
    
    
    if(teste() == 1)
    {
        echo"<script>alert('$livro_isbn')</script>";
    }
    else{
        $sql = "INSERT INTO cliente (nome, livro_ISBN) VALUES ('" . $nome ."','" . $livro_isbn . "')";
        if (mysqli_query($conn, $sql)):
        echo "Dados inseridos com sucesso!";
        //header('Location: ../apresentacao.php');
    
        endif;
    }
    
    
}


$_POST["aux"] = 0;


?>