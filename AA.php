<?php
 session_start();
 $_SESSION["username"]="Usuario";

 $contenidoSesion="";
 function agregarAession($data){
    return "Cantidad de Veces: " . $data; 
 }
function eliminarSession($data){
     return "ES Contenido:" . $data; 
 }
 /*if(!isset($_SESSION["click"])){
     $_SESSION["click"]=0;
 }*/
 
  if(isset($_POST["btnAdd"])){
    $contenidoSesion=agregarAession($_POST["txtData1"]);
     //$_SESSION["click"] ++;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Funciones y Sesion</title>
    <meta charset="utf-8"/>
</head>
<body>
    <h1>Funciones y el Arreglo Sesion</h1>
    <form action="AA.php" method="POST"/>
        <label for="txtData1">ID 1</label>
        <input type="text" id="txtData1" name="txtData1" />
        </br>
         <label for="txtData2">ID 2</label>
        <input type="text" id="txtData2" name="txtData2" />
        </br>
         <label for="txtData3">ID 3</label>
        <input type="text" id="txtData3" name="txtData3" />
        </br>
         <label for="txtData4">ID 4</label>
        <input type="text" id="txtData4" name="txtData4" />
        </br>
         <label for="txtData5">ID 5</label>
        <input type="text" id="txtData5" name="txtData5" />
        </br>
         <label for="txtData6">ID 6</label>
        <input type="text" id="txtData6" name="txtData6" />
        </br>
        <input type="submit" id="btnAdd" name="btnAdd" value="Agregar a la sesion" />
    </form>
    <div>
        <?php echo $contenidoSesion; ?>
    </div>
</body>
</html>