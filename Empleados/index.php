<?php
    //print_r($_POST);
  
    $txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtApellidoP=(isset($_POST['txtApellidoP']))?$_POST['txtApellidoP']:"";
    $txtApellidoM=(isset($_POST['txtApellidoM']))?$_POST['txtApellidoM']:"";
    $txtCorreo=(isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
    $txtFoto=(isset($_POST['txtFoto']))?$_POST['txtFoto']:"";

    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    switch ($accion) {
        case 'bntAgregar':
            echo "presionaste el boton agregar". "</br>";
            
            break;
        case 'bntModificar':
            echo "presionaste el boton modificar";
            break;
        case 'bntEliminar':
            echo "presionaste el boton eliminar";
            break;
        case 'bntCancelar':
            echo "presionaste el boton cancelar";
            break;

    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud con php y mysql</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" ectype="multipart/form-data">
        <label for="">Id</label>
        <input type="text" name="txtId" value="<?php echo "$txtId";?>" placeholder="" id="txt1" require="">
        <br>
        <label for="">Nombre(s)</label>
        <input type="text" name="txtNombre" value="<?php echo "$txtNombre";?>" placeholder="" id="txt2" require="">
        <br>
        <label for="">Apellido Paterno</label>
        <input type="text" name="txtApellidoP" value="<?php echo "$txtApellidoP";?>" placeholder="" id="txt3" require="">
        <br>
        <label for="">Apellido Materno</label>
        <input type="text" name="txtApellidoM" value="<?php echo "$txtApellidoM";?>" placeholder="" id="txt4" require="">
        <br>
        <label for="">Correo</label>
        <input type="text" name="txtCorreo" value="<?php echo "$txtCorreo";?>" placeholder="" id="txt5" require="">
        <br>
        <label for="">Foto</label>
        <input type="text" name="txtFoto" value="<?php echo "$txtFoto";?>" placeholder="" id="txt6" require="">
        <br>

        <button value="bntAgregar" type="submit" name="accion">Agregar</button>
        <button value="bntModificar" type="submit" name="accion">Modificar</button>
        <button value="bntEliminar" type="submit" name="accion">Eliminar</button>
        <button value="bntCancelar" type="submit" name="accion">Cancelar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
</html>