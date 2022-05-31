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
    <h1>UPLOAD DE &Aacute;UDIO</h1>
    <ul>
        <li><a href="index.php"><img src="img/iconmonstr-building-7-240.png"></a></li>
        <li><a href="imagens.php"><img src="img/iconmonstr-picture-19-240.png"></a></li>
        <li><a href="documentos.php"><img src="img/iconmonstr-file-thin-240.png"></a></li>
        <li><a href="audio.php"><img src="img/iconmonstr-audio-21-240.png"></a></li>
        <li><a href="video.php"><img src="img/iconmonstr-video-thin-240.png"></a></li>
    </ul>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <h4>Apenas arquivos em formato .mp3, .flac e .wav</h4>
    <form method="POST" action="processa.php" enctype="multipart/form-data">
       <table border=0>
            <tr>
                <td><label>Nome do arquivo:</label></td>
                <td><input type="text" name="audionome" placeholder="Digite o nome do arquivo de &aacute;udio..."></td>
            </tr>
            <tr>
                <td>Selecione o arquivo:</td>
                <td><input type="file" acceppt=".mp3, .flac, .wav" name="doc"></td>
            </tr>
            <tr>
                <td><input type="submit" name="sendaudio" value="cadastrar"></td>
            </tr>
        </table>
        <div class="aviso"></div>
    </form>
    
</body>
</html>