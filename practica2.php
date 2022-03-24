<?php
include 'include/conecta.php';
if(isset($_POST['registro'])){
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];
    if($Descripcion == ''){
    }
    else if($Precio == ''){
        echo "Necesito la descripcion";
    }
    else{
        $registro = "INSERT INTO producto(Descrpcion,Precio) VALUES('')"
        $registros =$conecta->query($registro);
        if($registros > 0){
            echo"Registro exitoso";
        }
        else{
            echo"Error al registrar en la base de datos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container py-4">
        <h1 class="text-center"> REGISTRO</h1>
        <div class="card shadow">
            <div class="row py-5 container">
                <h4 class="text-center">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">
                <input type= "text"  placeholder="Descripcion del producto" name="Descripcion" requerid>
                <input type= "text"  placeholder="Precio" name="Precio" requerid>
                <input type= "submit"   name="registro" value="Registro" requerid></h4>

                </form>
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script> 
    
</body>
</html>