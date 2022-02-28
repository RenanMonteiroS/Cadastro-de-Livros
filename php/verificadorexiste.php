<?php
function teste()
{
    require("coneccao.php");
    //header('Location: ../suamae.php');
    $x = "RENAN"
     $sql5 = "SELECT * from livro where ISBN = $";
     echo "<script>alert('$sql5')</script>";
  
    $contador = mysqli_query($conn, $sql5);
    if(mysqli_num_rows($contador) == 0)
    {
        
        //header('Location: ../cliente.php');
        return 1;
    }
    else{
        return 0;
    }
     
}
?>