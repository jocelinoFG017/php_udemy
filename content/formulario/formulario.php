<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<h1 class="titulo">Formulário</h1>

<h2>Cadastro</h2>

<?php
// Validações do formulário
if(count($_POST) > 0){
    $erros = [];

    //if(isset($_POST['nome'])){
    if(!filter_input(INPUT_POST, "nome")){
        $erros['nome'] =  "Nome é obrigatório";
    }
    if(filter_input(INPUT_POST, "nascimento")){
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data){
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }

    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erros['email'] = "Email Inválido";
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
        $erros['site'] = "site inválido";
    }
    $filhosConfig = [
        "options" => [
            "min_range" => 0,
            "max_range" => 20
        ]
    ];
    
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0){
        $erros['filhos'] = "Quantidade de filhos inválida";
    }

    $salarioConfig = ['option' => ['decimal' => ',']];

    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
        $erros['salario'] = "Salário inválido";
    }

}

?>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
    <?= ""//$erro ?>
    <!-- </div> -->
<?php endforeach ?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome"> Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome']?>">
            <div class="invalid-feedback">
                <?= $erros['nome']?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento"> Nascimento</label>
            <input type="text" class="form-control <?=$erros['nome'] ? 'is-invalid' : ''?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento']?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento']?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email"> Email</label>
            <input type="text" class="form-control <?=$erros['email'] ? 'is-invalid' : ''?>"  id="email" name="email" placeholder="Email" value="<?= $_POST['email']?>">
            <div class="invalid-feedback">
                <?= $erros['email']?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site"> Site</label>
            <input type="text" class="form-control <?=$erros['site'] ? 'is-invalid' : ''?>" id="site" name="site" placeholder="Site" value="<?= $_POST['site']?>">
            <div class="invalid-feedback">
                <?= $erros['site']?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos"> Qtde de Filhos</label>
            <input type="number" class="form-control <?=$erros['filhos'] ? 'is-invalid' : ''?>"  id="filhos" name="filhos" placeholder="Qtde de Filhos" value="<?= $_POST['filhos']?>">
            <div class="invalid-feedback">
                <?= $erros['filhos']?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="Salario"> Salário</label>
            <input type="text" class="form-control <?=$erros['salario'] ? 'is-invalid' : ''?>"  id="Salario" name="Salario" placeholder="Salário">
            <div class="invalid-feedback">
                <?= $erros['salario']?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-large">Enviar</button>
</form>