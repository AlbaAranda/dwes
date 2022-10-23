<?php
    $dept = new DOMDocument();  //Crear un DOM nuevo para el xml
    $dept->load("empleados.xml");   //Carga el xml en el nuevo DOM
    $respuesta = $dept->schemaValidate("departamento.xsd");
    echo ($respuesta) ? "Documento válido " : " Documento Inválido"; 