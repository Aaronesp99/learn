<?php
    require_once '../controller/index_controller.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../extra/css/index.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <title>Practicantes</title>
</head>
<body>
    <div class="container-fluid mx-auto" style="margin-top: 100px;">
    <div class="row p-4">
        <div class="col-md-5">
            <h3 class="font-weight-bold text-secondary text-center my-4">AGREGAR PRACTICANTE</h3>
            <form id="frmSubmit">
                <div class="form-group col-md-7 mx-auto">
                    <label for="">DNI:</label>
                    <input class="form-control" type="text" id="txtDni">
                </div>
                <div class="form-group col-md-7 mx-auto">
                    <label for="">NOMBRES:</label>
                    <input class="form-control" type="text" id="txtNombres">
                </div>
                <div class="form-group col-md-7 mx-auto">
                    <label for="">APELLIDO PATERNO:</label>
                    <input class="form-control" type="text" id="txtPaterno">
                </div>
                <div class="form-group col-md-7 mx-auto">
                    <label for="">APELLIDO MATERNO:</label>
                    <input class="form-control" type="text" id="txtMaterno">
                </div>
                <div class="form-group col-md-7 mx-auto">
                    <label for="">CELULAR:</label>
                    <input class="form-control" type="text" id="txtCelular">
                </div>
                <div class="text-center">
                    <button id="btnGuardar">GUARDAR</button>
                </div>
            </form>
        </div>
        <div class="col-md-7 table-responsive">
            <table class="table table-hover mx-auto" style="width: 700px;" id="tablaPracticantes">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>NOMBRES</th>
                        <th>PATERNO</th>
                        <th>MATERNO</th>
                        <th>CELULAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($resultado as $val){ ?>
                        <tr>
                            <td><?php echo$val["dni"]?></td>
                            <td><?php echo$val["nombres"]?></td>
                            <td><?php echo$val["apePaterno"]?></td>
                            <td><?php echo$val["apeMaterno"]?></td>
                            <td><?php echo$val["celular"]?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../../extra/js/practicantes.js"></script>
</body>
</html>