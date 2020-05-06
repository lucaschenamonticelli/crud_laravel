<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('cliente') ?>">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url('vendedor') ?>">Vendedores</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid" style="margin-top:80px">
        <h3>Clientes</h3>
        <!-- <form action="<?php echo url('cliente/salvar') ?>" method="POST"> -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    Nome
                    <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo @$cliente[0]->nome ?>">
                    <input type="hidden" name="id" value="<?php echo @$cliente[0]->id ?>">
                </div>
                <div class="col-12 col-md-6">
                    Telefone
                    <input type="text" name="fone" class="form-control" placeholder="Telefone" value="<?php echo @$cliente[0]->fone ?>">
                </div>
                <div class="col-12 text-center mt-4">
                    <button class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
        <!-- </form> -->
    </div>

</body>
</html>