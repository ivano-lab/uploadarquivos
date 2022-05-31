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
    <h1>UPLOAD DE V&Iacute;DEO</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4>Apenas arquivos em formato .mkv, .mp4 e .avi</h4>
    <form method="POST" action="processa.php" enctype="multipart/form-data">
       <table border=0>
            <tr>
                <td><label>Nome do arquivo:</label></td>
                <td><input type="text" name="videonome" placeholder="Digite o nome do arquivo de v&iacute;deo..."></td>
            </tr>
            <tr>
                <td>Selecione o arquivo:</td>
                <td><input type="file" acceppt=".mkv, .mp4, .avi" name="doc"></td>
            </tr>
            <tr>
                <td><input type="submit" name="sendvideo" value="cadastrar"></td>
            </tr>
        </table>
    </form>    
    
</body>
</html>