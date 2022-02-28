<?php
echo "<p class=\"h2 text-center\"> Dados pessoais </p>"; 
echo "<p class=\"text-center\">";   

foreach($arraydadospessoaisbasico as $chave => $valor)
{     
    $cont++;
    if($cont == 4)
    {
        echo "$valor ";
    }
        
    else
    {
        echo "$valor, ";
    }
        
}
echo "</p>";

$cont = 0;
echo "<br>";


echo "<p class=\"text-center\">"; 
foreach($arraydadospessoaisende1 as $chave => $valor)
{ 
    $cont++;
    if($cont == 3)
    {
        echo "$valor - ";
    }
    
    else
    {
        echo "$valor, ";
    }

    
}
$cont = 0;
echo "</p>";


echo "<p class=\"text-center\">"; 
foreach($arraydadospessoaisende2 as $chave => $valor)
{ 
    $cont++;
    if($cont == 3)
    {
        echo "$valor ";
    }
    
    else
    {
        echo "$valor - ";
    }

    
}
$cont = 0;
echo "<br>";
echo "</p>";


echo "<p class=\"text-center\">"; 
foreach($arraydadospessoaisctt as $chave => $valor)
{ 
    if($chave == "telefone")
    {
        echo "Telefone: $valor -";
    }
    
    else
    {
        echo " E-mail: $valor";
    }

    
}
echo "</p>";
echo "<br>";

echo "<p class=\"h2 text-center\"> Objetivo </p>"; 
echo "<p class=\"text-center\">"; 
foreach($objetivo as $chave => $valor)
{ 
    
    echo "$valor ";
    
    
}
echo "</p>";
echo "<br>";

echo "<p class=\"h2 text-center\"> Escolaridade </p>"; 
echo "<p class=\"text-center\">"; 
foreach($formacaoescolar as $chave => $valor)
{ 
    if($chave == "tEsc")
    {
        echo "Possui " . $valor;
    }

    if($chave == "curso")
    {
        echo " no curso de " . $valor;
    }
    
    if($chave == "instituicao")
    {
        echo " na instituição" . $valor;
    }
    
    if($chave == "conclusao")
    {
        echo ", conclusão no ano de " . $valor;
    }
    
}
echo "</p>";
echo "<br>";

echo "<p class=\"h2 text-center\"> Experiência profissional </p>"; 
echo "<p class=\"text-center\">"; 
foreach($profissional as $chave => $valor)
{
    if($chave == "entrada")
    {
        echo "$valor";
    }

    if($chave == "saida")
    {
        echo "-$valor ";
    }

    if($chave == "cargo")
    {
        echo "- $valor, ";
    }

    if($chave == "setor")
    {
        echo "$valor -";
    }

    if($chave == "atividade")
    {
        echo " $valor";
    }
}
echo "</p>";
echo "<br>";


echo "<p class=\"h2 text-center\"> Atividades extra-curriculares </p>"; 
echo "<p class=\"text-center\">"; 
foreach($atividadeextra as $chave => $valor)
{
    if($chave == "atividadeExtra")
    {
        echo "$valor - ";
    }
    else
    {
        echo "$valor";
    }
    
    
    
}
echo "</p>";
echo "<br>";


echo "<p class=\"h2 text-center\"> Idioma </p>"; 
echo "<p class=\"text-center\">"; 
foreach($idioma as $chave => $valor)
{
    if($chave == "idiomaCurso")
    {
        echo "$valor -";
    }

    if($chave == "idiomaNivel")
    {
        echo " $valor -";
    }

    if($chave == "idiomaInstituicao")
    {
        echo " $valor";
    }
}
echo "</p>";
?>