<?php
 session_start();
 $_SESSION["username"]="Usuario";

 $contenidoSesion="";
 function agregarAession($data){
    return "AS Contenido:" . $data; 
 }
 function eliminarSession($data){
     return "ES Contenido:" . $data; 
 }
 if(!isset($_SESSION["click"])){
     $_SESSION["click"]=0;
 }
 if(isset($_POST["btnAdd"])){
    $contenidoSesion=agregarAession($_POST["txtData"]);
     $_SESSION["click"] ++;
 }
 if(isset($_POST["btnSubs"])){
    $contenidoSesion= eliminarSession($_POST["txtData"]);
     $_SESSION["click"] ++;
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Funciones y Sesion</title>
    <meta charset="utf-8"/>
</head>
<body>
    <h1>Funciones y el Arreglo Sesion</h1>
    <form action="eje5.php" method="POST"/>
        <label for="txtData">Texto de un blog</label>
        <input type="text" id="txtData" name="txtData" />
        </br>
        <input type="submit" id="btnAdd" name="btnAdd" value="Agregar a la sesion" />
        <input type="submit" id="btnSubs" name="btnSubs" value="Eliminar de la sesion" />
    </form>
    <div>
        <?php echo $contenidoSesion; ?>
    </div>
</body>
</html>