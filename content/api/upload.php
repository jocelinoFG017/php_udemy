<div class="titulo">Upload</div>

<?php
ini_set('display_errors', 1);
print_r($_FILES); // array do php para adicionar arquivos

if($_FILES && $_FILES['arquivo']){
    // $pastaUpload = '/home/jocelino/Pictures';
    $pastaUpload = '/opt/lampp/htdocs/php_udemy/content/api/uploads';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload .'/' . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)){
        echo "Arquivo válido e enviado com sucesso";
    }else{
        echo "<br>Erro no upload do arquivo";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>

</form>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>