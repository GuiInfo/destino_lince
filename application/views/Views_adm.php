<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-bar w3-dark-gray w3-large">
        <a href="<?= base_url('index.php/Controller_adm') ?>" class="w3-bar-item w3-margin" style="text-decoration: none;">Pojeto Lince</a>
        <input type="text" id="busca_nome" class="w3-bar-item w3-input w3-round-xlarge w3-margin" placeholder="Procurar Destinos" value="<?= $pesquisa ?>">
        <button id="btn_busca_nome" class="w3-bar-item w3-button w3-green w3-round-xlarge w3-margin">Pesquisar</button>
        <a href="<?= base_url('index.php/Controller_destinos/forminserir') ?>" class="w3-bar-item w3-button w3-blue w3-round-xlarge w3-margin">Adicionar Destino </a>
        <a href="<?= base_url("index.php/Controller_adm/logout") ?>" class="w3-bar-item w3-right w3-button w3-red w3-round-xlarge w3-margin">Sair</a>
    </div>

        <?php $contador = 0 ?>
        <?php foreach ($destinos as $destino) : ?>
            <br>
            <div class="w3-container">
                <div class="w3-card-4 w3-col-s4" style="width:15%;">
                    <header class="w3-container w3-center">
                        <h4><?= $destino->nome ?></h4>
                        <a href="<?= base_url("index.php/Controller_destinos/formeditar/{$destino->id}") ?>" title="Editar Cadastro" class="w3-bar-item w3-margin w3-button w3-blue w3-round-xlarge">Editar</a>
                        <a href="<?= base_url("index.php/Controller_destinos/apagarDestino/{$destino->id}") ?>" title="Exlcuir" class="w3-bar-item w3-margin w3-button w3-red w3-round-xlarge">Excluir</a>
                    </header>
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
            window.location.href = '<?= base_url("index.php/Controller_adm/index") ?>/' + pesquisa;
        });
    });
</script>

</html>