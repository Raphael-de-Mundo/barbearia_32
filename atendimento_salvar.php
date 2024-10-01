<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">
            <?php
            // 1 passo incluir as configurações do acesso a dados
            include "conexao_bd.php";
            //2 Passo capturar  os valores informados pelo usuario
            $nome_cliente =$_POST["txtNome"];
            $id_servico = $_POST["selectServico"];
            $data_agendamento = $_POST["txtData"];
            $horario = $_POST["selectHorario"];
            //3 passo montar o comando sql para inserir o agendamento
            $sql= "INSERT INTO agendamento(nome_cliente,id_servico,data_agendamento,horario) ";
            $sql.=" VALUES('$nome_cliente','$id_servico','$data_agendamento','$horario') ";
            //4 passo executar o comando sql
            if (executarComando ($sql)){
                echo "<h2>Servico agendado!</h2>";
            }
            else{
                echo "<h2>Não foi possivel agendar!</h2>";
            }
            ?>
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
