<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">NEXTSIZE</a>
        <a href="<?= base_url('index.php/Controller_destinos/forminserir') ?>">Adicionar Destino </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <input type="text" id="busca_nome" class="form-control mr-sm-5" placeholder="Buscar por nome do local" value="<?= $pesquisa ?>">
            <button id="btn_busca_nome" class="btn btn-outline-success my-5 my-sm-0">Buscar</button>
        </div>
        <button id="" class="btn ">Sair</button>
            
    </nav>

    
    <!-Inicia a tabela para mostrar os dado do BD ->
        <?php $contador = 0 ?>
        <?php foreach ($destinos as $destino) : ?>
            <br>
            <div class="card container" style="width: 70rem;">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= $destino->nome ?></h5>
                    <a href="<?= base_url("index.php/Controller_destinos/formeditar/{$destino->id}") ?>" title="Editar Cadastro" class=btn btn-primary">Editar</a>
                    <a href="<?= base_url("index.php/Controller_destinos/apagarDestino/{$destino->id}") ?>" title="Exlcuir" class=btn btn-primary">Excluir</a>
                </div>
            </div>
            <?php $contador++ ?>
        <?php endforeach ?>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(() => {
        $('#btn_busca_nome').on('click', e => {
            let pesquisa = $('#busca_nome').val();
            window.location.href = '<?= base_url("index.php/Controller_adm") ?>/' + pesquisa;
        });
    });

</script>

</html>