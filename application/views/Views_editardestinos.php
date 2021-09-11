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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NEXTSIZE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="<?= base_url('index.php/Controller_destinos') ?>">VOLTAR</a>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="row">
            <form class="container" id="form_add" method="post">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label>Nome</label>
                        <input type="text" name="nome" value="<?php echo $destinos->nome ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label>Descrição</label>
                        <input type="text" name="descricao" value="<?php echo $destinos->descricao ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label>Endereço</label>
                        <input type="text" name="endereco" value="<?php echo $destinos->endereco ?>" class="form-control">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        <input type="hidden" name="id" value="<?php echo $destinos->id ?>">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(() => {
        $('#form_add').on('submit', e => {
            //não usar o submit do form
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

</html>