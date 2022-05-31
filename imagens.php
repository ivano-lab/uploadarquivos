<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploadarquivos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>UPLOAD DE IMAGENS</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php" enctype="multipart/form-data">
       <table border=0>
            <tr>
                <td><label>Nome do arquivo:</label></td>
                <td><input type="text" name="imgnome" placeholder="Digite o nome da imagem..."></td>
            </tr>
            <tr>
                <td>Selecione o arquivo:</td>
                <td><input type="file" name="imagem"></td>
            </tr>
            <tr>
                <td><input type="submit" name="sendimg" value="cadastrar"></td>
                <td>Apenas arquivos em formato .pdf/a</td>
            </tr>
        </table>
        <div class="aviso"></div>
    </form>
</body>
</html>