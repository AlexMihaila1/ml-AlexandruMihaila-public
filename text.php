<?php

echo"<table><tr><td>Nombre</td><td>Description</td></ts>";

//Read the file line to line
$myfile = fopen()
$line = "Las Canteras;La mejor playa;Las Palmas de GC;HTTP://MIPLAYADELASCANTERAS.COM;HTTP";

//Separate the content of every line of the file
$array_line = explode(";",$line);

echo"<pre>";
var_dump($array_line);
echo "</pre>";

echo "<br>El nombre del lugar es...",$array_line[0];
echo "<br>La descripcion del lugar es...".$array_line[2];