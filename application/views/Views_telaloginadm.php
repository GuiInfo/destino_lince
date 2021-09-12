<!DOCTYPE html>
<html lang="pt-BR">
<!--INICIO HEAD-->
    <head >
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<!--FIM HEAD-->
<!-- INICIO BODY-->
    <body>
        <div class="w3-bar w3-dark-gray w3-large">
            <a href="<?= base_url('index.php/Controller_adm') ?>" class="w3-bar-item w3-margin" style="text-decoration:none">Pojeto Lince</a>
        </div>
        <div class="w3-container w3-half w3-margin-top" style="width:15%;">
            <form class="w3-container w3-card-4" action="#" id="form_login" method="post">
                <p>
                    <label>Usuario</label>
                </p>
                    <input class="w3-input" type="text" name="usuario" value="" style="width:100%" required>
                <p>
                    <label>Senha</label></p>
                    <input class="w3-input" type="password" name="senha" value="" style="width:100%" required>
                <p>
                <button type="submit" class="w3-button w3-section w3-teal w3-button w3-round-xlarge w3-green w3-margin">Login</button></p>
            </form>
        </div>
    </body>
<!-- FIM CORPO-->

<!--INICIO SCRIPT JSON PARA VALIDAÇÃO DO FORMULARIO E PASSAGEM DE DADOS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    //FICA EM SEGUNDO PLANO AGUARDADO O SUBMIT DO FORM_LOGIN
    $(() => {
        $('#form_login').submit(e => {
            //BLOQUEIA O USO DO SUBMIT DO FORM
            e.preventDefault();

            let form = e.currentTarget;

            $.post(`<?= base_url('index.php/Controller_adm/login') ?>`, $(form).serialize(), {}, 'json')
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
        