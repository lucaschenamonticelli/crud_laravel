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
        <div class="row">
            <div class="col-12 mb-4">
                <a href="<?php echo url('cliente/novo') ?>">
                    <button class="btn btn-primary">Novo Cliente</button>
                </a>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($cliente as $key => $value):
                    ?>
                    <tr>
                        <td><?php echo $value->nome ?></td>
                        <td><?php echo $value->fone ?></td>
                        <td>
                            <a href='<?php echo url("cliente/editar/$value->id") ?>'>
                                <button class="btn btn-info btn-sm">Editar</button>
                            </a>
                            <a href="<?php echo url("cliente/deletar/$value->id") ?>">
                                <button class="btn btn-danger btn-sm">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>