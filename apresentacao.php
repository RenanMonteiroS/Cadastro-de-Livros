<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/> 
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Dados Cadastrados</title>
    
</head>
<body >


    <form action="apresentacao.php" method="post" id="envio" name="envio" class="formul">
        <h4 class="display-6"> Dados Cadastrados </h4>

        <br> <br>

        <label>
            <input type = "text" name="busca" placeholder="Pesquisar"/>
        </label>    
        <button type="submit" name="btn-pesquisar">Pesquisar</button>
        <br><br>
        <h4>Livro</h4>
        <div class = "table-scroll">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ISBN</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Título</th>
                        <th scope="col">Categoria</th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require("php/coneccao.php");
                    $sql = "SELECT * FROM livro order by titulo";
                    $result = mysqli_query($conn, $sql);

                    
                    if (!empty($_POST['busca'])){
                        $busca = filter_input(INPUT_POST, 'busca', FILTER_SANITIZE_STRING);
                        $busca = '%' . $busca . '%'; // 
                
                        $sql = "SELECT * FROM livro WHERE livro.ISBN LIKE ? OR livro.autor LIKE ? OR livro.titulo LIKE ? OR livro.categoria LIKE ?";

                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql)){
                            echo "Falhou!";
                        }

                        else{
                            mysqli_stmt_bind_param($stmt, "ssss", $busca, $busca, $busca, $busca);
                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                        }


                    }




                    if (mysqli_num_rows($result) > 0):
                        while ($lista = mysqli_fetch_array($result)):
                        
                        
                    
                ?>

                <tr>
                    <td> <?php echo $lista['ISBN']; ?></td> </a>
                    <td> <?php echo $lista['autor']; ?></td> </a>
                    <td> <?php echo $lista['titulo']; ?></td> </a>
                    <td> <?php echo $lista['categoria']; ?><td> </a>
                    <td><a href="editar.php?ISBN=<?php echo $lista['ISBN']; ?>"> Editar</a> </td>
                </tr>

                <?php
                    endwhile;
                        else:
                        endif;
                ?>
        
                </tbody>
            </table>
        </div>

        <br>
        <h4> Cliente </h4>
        <div class = "table-scroll">
            <table class="table">
                <thead class="thead-dark">
                    <tr >
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">ISBN</th>
                    </tr>
                </thead>
                <tbody>
            
                    <?php
                    $sql2 = "SELECT * FROM cliente order by nome";
                    $result2 = mysqli_query($conn, $sql2);
                    
                    if (!empty($_POST['busca'])){
                        $sql2 = "SELECT * FROM cliente WHERE cliente.nome LIKE ? OR cliente.livro_ISBN LIKE ?";

                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql2)){
                            echo "Falhou!";
                        }

                        else{
                            mysqli_stmt_bind_param($stmt, "ss", $busca, $busca);
                            mysqli_stmt_execute($stmt);

                            $result2 = mysqli_stmt_get_result($stmt);
                        }
                    }
                
                    if (mysqli_num_rows($result2) > 0):
                        while ($lista2 = mysqli_fetch_array($result2)): 
                    ?>

                    <tr>
                        <td><?php echo $lista2['idcliente']; ?></button></td>
                        <td><?php echo $lista2['nome']; ?></button></td>
                        <td><?php echo $lista2['livro_ISBN']; ?></button></td>
                        <td><a href="php/excluir.php?idcliente=<?php echo $lista2['idcliente']; ?>"> Excluir</a> </td>
                    </tr>

                    <?php
                    endwhile;
                        else:
                        endif;
                    ?>
            
                </tbody>
            </table>
        </div>
        
        


        

        

        <br> <br>
       
    </form>

    

   
</body>
</html>