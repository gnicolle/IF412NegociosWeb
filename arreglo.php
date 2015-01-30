<?php
//ejemplo de areglo en php

 $arreglo=array(1,2,3,4,"Texto",false);
 //depuracion
 print_r($arreglo);
 echo "</br>";
 
 $arreglo2= array("nombre" => "Nicolle", "apellido" => "Gonzalez", "edad" => "20");
 print_r($arreglo2);
 
  echo "</br>";
  
 $arreglo2[]="Esto no tiene llave";
  $arreglo2["titulo"]="Sr.";
 print_r($arreglo2);
   echo "</br>";
   
   $personas=array();
   $personas[]=$arreglo2;
   $personas[]=$arreglo;
   
   print_r($personas);
      echo "</br>";
       echo "</br>";
      
      foreach($personas as $key => $value){
        echo "$key ->";
        if(is_array($value)){
            foreach($value as $key2 => $value2){
                echo "</br>......... $key2 -> $value2";
            }
        }else{
            echo $value;
        }
        //print_r($value);
           echo "</br>";
      }
   
?>