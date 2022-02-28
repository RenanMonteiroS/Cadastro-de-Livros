<?php
    require_once('coneccao.php');


    $ISBN = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

   
    $sql  = "UPDATE livro SET 
            titulo = '" . $titulo ."' , autor = '". $autor ."', categoria = '" . $categoria."'
            WHERE ISBN = '". $ISBN . "'";

    echo $sql;
    if (mysqli_query($conn, $sql)){
        header('Location: ../livro.php');
    }       
    else{
        echo "errou";
    }
        

    
?>