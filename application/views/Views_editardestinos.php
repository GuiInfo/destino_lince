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
            <a href="<?= base_url('index.php/Controller_adm') ?>" class="w3-bar-item w3-margin" style="text-decoration: none;">Pojeto Lince</a>
            <a href="<?= base_url("index.php/Controller_adm/logout") ?>" class="w3-bar-item w3-right w3-button w3-red w3-round-xlarge w3-margin">Sair</a>
        </div>

        <form class="w3-container w3-card-4 w3-margin w3-margin-bottom" style="width:25%;" id="form_add" method="post">
            <div class="w3-container">
                <h2> Editar Destino</h2>
            </div>
                <br>
                    <p>      
                        <label class="w3-text-grey">Destino</label>
                        <input class="w3-input w3-border" type="text" name="nome" value="<?php echo $destinos->nome ?>" required="">
                    </p>
                    <p>      
                        <label class="w3-text-grey">Mini - Descrição</label>
                        <input class="w3-input w3-border" type="text" name="minidescricao" value="<?php echo $destinos->minidescricao ?>" required="">
                    </p>
                    <p>      
                        <label class="w3-text-grey">Descrição</label>
                        <input class="w3-input w3-border" style="height: 70%" style="resize:none" type="text" name="descricao" value="<?php echo $destinos->descricao ?>">
                    </p>
                    <p>      
                        <label class="w3-text-grey">Endereço</label>
                        <input class="w3-input w3-border" type="text" type="text" name="endereco" value="<?php echo $destinos->endereco ?>" required="" >
                    </p>
                    <input type="hidden" name="id" value="<?php echo $destinos->id ?>">
                    <button type="submit" class="w3-button w3-section w3-teal w3-button w3-round-xlarge w3-green w3-margin">Atualizar</button></p>
                <br>
        </form>
    </body>

<!--FIM BODY-->

<!--INICIO SCRIPT JSON PARA VALIDAÇÃO DO FORMULARIO E PASSAGEM DE DADOS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    //FICA EM SEGUNDO PLANO AGUARDADO O SUBMIT DO FORM_LOGIN
    $(() => {
        $('#form_add').on('submit', e => {
            //BLOQUEIA O USO DO SUBMIT DO FORM
            e.preventDefault();

            let form = e.currentTarget;

            $.post(`<?= base_url('index.php/Controller_destinos/atualizarItem') ?>`, $(form).serialize(), {}, 'json')
                .done(ret => {
                    window.alert(ret.message);
                    if (ret.status) {
                        window.location.href = '<?= base_url('index.php/Controller_adm') ?>';
                    }
                });
        });
    });
</script>
<!--FIM SCRIPT JSON-->
</html>