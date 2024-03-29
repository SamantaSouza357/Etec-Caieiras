<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EtecNews - Categorias</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row mt-3 px-2">
            <div class="col-sm-10 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Consulta de Categorias</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($dadosCategoria as $value)
                            {
                                echo "<tr>
                                        <th scope='row'>$value->cod_categoria</th>
                                        <td>$value->nm_categoria</td>
                                        <td>
                                        <a href='". URL ."excluir-categoria/$value->cod_categoria' onclick='return confirm(\"Tem certeza?\")' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash'></i></a>
                                        <a href='". URL ."editar-categoria/$value->cod_categoria' class='btn btn-outline-warning btn-sm'><i class='fa fa-edit'></i> </a>
                                    </td>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>