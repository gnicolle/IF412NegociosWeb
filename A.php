<?php
 session_start();
 $_SESSION["username"]="Usuario";

 $contenidoSesion="";
 function agregarAession($data){
    return "Cantidad de Veces: " . $data; 
 }
 /*function eliminarSession($data){
     return "ES Contenido:" . $data; 
 }*/
 if(!isset($_SESSION["click"])){
     $_SESSION["click"]=0;
 }
 if(isset($_POST["btnAdd"])){
    $contenidoSesion=agregarAession($_POST["txtData"]);
     $_SESSION["click"] ++;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Funciones y Sesion</title>
    <meta charset="utf-8"/>
</head>
<body>
    <h1>Funciones y el Arreglo Sesion</h1>
    <form action="A.php" method="POST"/>
        <label for="txtData">ID 1</label>
        <input type="text" id="txtData1" name="txtData" />
        </br>
         <label for="txtData">ID 2</label>
        <input type="text" id="txtData2" name="txtData" />
        </br>
         <label for="txtData">ID 3</label>
        <input type="text" id="txtData3" name="txtData" />
        </br>
         <label for="txtData">ID 4</label>
        <input type="text" id="txtData4" name="txtData" />
        </br>
         <label for="txtData">ID 5</label>
        <input type="text" id="txtData5" name="txtData" />
        </br>
         <label for="txtData">ID 6</label>
        <input type="text" id="txtData6" name="txtData" />
        </br>
        <input type="submit" id="btnAdd" name="btnAdd" value="Agregar a la sesion" />
    </form>
    <div>
        <?php echo $contenidoSesion; ?>
    </div>
</body>
</html>