<!DOCTYPE html>
<html lang="pt-BR">
<!--INICIO HEAD-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<!--FIM HEAD-->
<!--INICIO BODY-->
    <body>

        <div class="w3-bar w3-dark-gray w3-large">
            <a href="<?= base_url('index.php/Controller_destinos') ?>" class="w3-bar-item w3-margin w3-text-white" style="text-decoration: none;" >Pojeto Lince</a>
            <input type="text" id="busca_nome" class="w3-bar-item w3-input w3-round-xlarge w3-margin" placeholder="Procurar Destinos" value="<?= $pesquisa ?>">
            <button id="btn_busca_nome" class="w3-bar-item w3-button w3-green w3-round-xlarge w3-margin">Pesquisar</button>
            <a href="<?= base_url('index.php/Controller_adm/telaloginadm') ?>" class="w3-bar-item w3-button  w3-round-xlarge w3-right w3-green w3-margin">Login ADM</a>
        </div>

        <!-- LOOP DA LISTAGEM DO BD-->
            </div>
            <?php $contador = 0 ?>
                <?php foreach ($destinos as $destinos) : ?>
                    <br>
                    <div class="w3-container w3-center" style="margin-left: 30%">
                        <div class="w3-card-4" style="width:50%;">
                            <header class="w3-container">
                                <h4 class="w3-margin-top"><?= $destinos->nome ?></h4>
                            </header>
                            <div class="w3-container">
                                <p>
                                    <textarea cols="50" rows="3" style="resize:none;border: 0"><?= $destinos->minidescricao ?></textarea>
                                </p>
                            </div>  
                            <!--INICIO MODAL-->
                            <button onclick="document.getElementById('id01<?= $destinos->id ?>').style.display='block'" class="w3-bar-item w3-button w3-round-xlarge w3-green w3-margin">Detalhes</button>
                            <div id="id01<?= $destinos->id ?>" class="w3-modal w3-animate-opacity">
                                <div class="w3-modal-content w3-card-4">
                                    <header class="w3-container w3-green"> 
                                        <span onclick="document.getElementById('id01<?= $destinos->id ?>').style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
                                        <h2><?= $destinos->nome ?></h2>
                                    </header>
                                    <div class="w3-container">
                                        <p>
                                            Descrição:<br>
                                            <?= $destinos->descricao ?>
                                        </p>
                                        <p>
                                            Endereço:<br>
                                            <?= $destinos->endereco ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--FIM MODAL-->
                        </div>
                    </div> 
                    <?php $contador++ ?>
            <?php endforeach ?>
    </body>
<!--FIM BODY-->

<!--INICIO SCRIPT JSON PARA BOTÃO PESQUISAR-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(() => {
        $('#btn_busca_nome').on('click', e => {
            let pesquisa = $('#busca_nome').val();
            window.location.href = '<?= base_url("index.php/Controller_destinos/index") ?>/' + pesquisa;
        });
    });
</script>
<!--FIM SCRIPT-->
</html>