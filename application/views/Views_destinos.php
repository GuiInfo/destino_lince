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
        <a href="<?= base_url('index.php/Controller_destinos') ?>" class="w3-bar-item w3-margin" style="text-decoration: none;" >Pojeto Lince</a>
        <input type="text" id="busca_nome" class="w3-bar-item w3-input w3-round-xlarge w3-margin" placeholder="Procurar Destinos" value="<?= $pesquisa ?>">
        <button id="btn_busca_nome" class="w3-bar-item w3-button w3-green w3-round-xlarge w3-margin">Pesquisar</button>
        <a href="<?= base_url('index.php/Controller_adm/telaloginadm') ?>" class="w3-bar-item w3-button  w3-round-xlarge w3-right w3-green w3-margin">Login ADM</a>
    </div>

    <!-Inicia a tabela para mostrar os dado do BD ->
        </div>
        <?php $contador = 0 ?>
        <?php foreach ($destinos as $destinos) : ?>
            <br>
            <div class="w3-container">
                <div class="w3-card-4" style="width:35%;">
                    <header class="w3-container">
                        <h4><?= $destinos->nome ?></h4>
                    </header>
                    <div class="w3-container">
                        <p><?= $destinos->descricao ?></p>
                    </div>
                    <footer class="w3-container">
                        <button class="w3-margin w3-center w3-button w3-white w3-border w3-border-green w3-round-large">Detalhes</button>
                    </footer>
                </div>
            </div> 
            <!-- <div class="card container w3-row" style="width: 70rem;">
                <div class="card-body"><div class="w3-row">
                    <h5 class="card-title"><?= $destinos->nome ?></h5>
                    <a href="#" class="btn btn-primary">Detalhes</a>
                </div>
            </div> -->
            <?php $contador++ ?>
        <?php endforeach ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(() => {
        $('#btn_busca_nome').on('click', e => {
            let pesquisa = $('#busca_nome').val();
            window.location.href = '<?= base_url("index.php/Controller_destinos/index") ?>/' + pesquisa;
        });
    });

</script>

</html>