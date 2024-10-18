<h1 class="titulo">Imagens</h1>

<?php
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../uploads';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload .'/' . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)){
    echo "Arquivo válido e enviado com sucesso";
    $arquivos[] = $nomeArquivo; // adiciona o nome do arquivo no array
    $_SESSION['arquivos'] = $arquivos;
}else{
    echo "<br>Erro no upload do arquivo";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo):?>
        <?php if(stripos($arquivo, '.png') > 0):?>
    <li>
        <img src="uploads/<?= urlencode($arquivo) ?>"
             height="120" />
    </li>
    <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
