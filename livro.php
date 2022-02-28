<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
    <title>Cadastro Livro</title>
    
</head>
<body >

    <?php
        require("header.php");
    ?>

    <form action="php/inserir.php" method="post" id="envio" name="envio" class="formul">
        <h4 class="display-6"> Cadastro Livro </h4>


        <h4>Livro</h4>
        <div class="row">
            <div class="col">
                <label for="isbn"> ISBN: </label>
                <input type="text" name="isbn" id="isbn" placeholder="ISBN" class="form-control" required/>
            </div>

            <div class="col">
                <label for="titulo"> Título: </label>
                <input type="text" name="titulo" id="titulo" placeholder="Título" class="form-control" autofocus="" required/>
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label for="autor"> Autor: </label>
                <input type="text" name="autor" id="autor" placeholder="Autor" class="form-control" required/>
            </div>

            <div class="col">
                <label for="categoria"> Categoria: </label>
                <input type="text" name="categoria" id="categoria" placeholder="Categoria" class="form-control" required/>
            </div>

            
        </div>

        
        <input type="hidden" id="aux" name="aux" value="1">

        

        
        <input type="submit" value="Enviar" class="btn btn-dark"></button>
    </form>

    

  
</div>
</body>
</html>