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
<!--INICIO BODY-->
    <body>
        <div class="w3-bar w3-dark-gray w3-large">
            <a href="<?= base_url('index.php/Controller_adm') ?>" class="w3-bar-item w3-margin">Pojeto Lince</a>
            <a href="<?= base_url("index.php/Controller_adm/logout") ?>" class="w3-bar-item w3-right w3-button w3-red w3-round-xlarge w3-margin">Sair</a>
        </div>
        <!--INICIO FORMULARIO DE INSERÇÃO DE DADOS-->
        <form class="w3-container w3-card-4 w3-margin w3-margin-bottom" style="width:25%;" action="adddestino" name="form_add" method="post">
            <div class="w3-container">
                <h2> Cadastrar Destino</h2>
            </div>
                <br>
                    <p>      
                        <label class="w3-text-grey">Destino</label>
                        <input class="w3-input w3-border" type="text" name="nome" value="" required="">
                    </p>
                    <p>      
                        <label class="w3-text-grey">Mini-Descrição</label>
                        <input class="w3-input w3-border" style="resize:none" type="text" name="minidescricao" value="">
                    </p>
                    <p>      
                        <label class="w3-text-grey">Descrição</label>
                        <input class="w3-input w3-border" style="resize:none" type="text" name="descricao" value="">
                    </p>
                    <p>      
                        <label class="w3-text-grey">Endereço</label>
                        <input class="w3-input w3-border" type="text" type="text" name="endereco" value="" required="" >
                    </p>
                    <button type="submit" class="w3-button w3-section w3-teal w3-button w3-round-xlarge w3-green w3-margin">Cadastrar</button></p>
                <br>
        </form>
        <!--FIM FORMULARIO DE INSERÇÃO DE DADOS-->
    </body>
 <!--FIM BODY-->   
</html>
        