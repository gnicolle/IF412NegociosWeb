<?php
    $result="";
    $txtOrg="";
    if(isset($_POST["btnPrc"])){
        $txtOrg= strtolower($_POST["txtOrg"]);
        $txtOrg= str_replace(".","",$txtOrg);
        $txtOrg= str_replace(",","",$txtOrg);
        $txtOrg= str_replace("?","",$txtOrg);
        $txtOrg= str_replace("!","",$txtOrg);
        $txtOrg= str_replace("¿","",$txtOrg);
        $txtOrg= str_replace("¡","",$txtOrg);
        //pre_replace remplazar mediante expresiones regulares
        
        //explode nos permite separar palabras con lo que deseemos
        $arregloPalabras=explode(" ",$txtOrg);
        $arregloFrecuencias =array();
        
        foreach($arregloPalabras as $palabra){
            if(isset($arregloFrecuencias[$palabra])){
                $arregloFrecuencias[$palabra]++;
            }else{
                 $arregloFrecuencias[$palabra]=1;
            }
        }
        arsort($arregloFrecuencias);//associative reverse sort
        
        print_r($arregloFrecuencias);
        die();//detiene el proceso
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de Uso de Arreglos</title>
    <meta charset="utf-8"/>
</head>
<body>
    <h1>Stats de BlogS</h1>
    <form action="eje4.php" method="POST"/>
        <label for="txtOrg">Texto de un blog</label>
    </br>
        <textarea id="txtOrg" name="txtOrg">
            <?php echo $txtOrg; ?>
        </textarea>
    </br>
        <input type="submit" id="btnPrc" name="btnPrc" value="Procesar"/>
    </form>
    <div>
        <?php echo $result; ?>
    </div>
</body>
</html>