<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <form id="frmusuario">
            <input type="text" name="nomusuario" id="nomusuario">
            <input type="password" name="clave" id="clave">
            <input type="button" onclick="" value="Enviar" id="enviar">

        </form>
        <?php
        // put your code here
        ?>
    </body>
    <script>
        $(document).ready(function(){
            $("#enviar").click(function(){
                /*$("form").hide();
                alert("Te la echaste HERMANITOOOOOOOOOOOOOOOOOOO");*/
        
                if($("#nomusuario").val()!= "" && $(#clave).val()!=""){
                    $("#frmusuario").submit();
                
                else
                    alert("Escrie el nombre de usuario y clave oe");
                
            });
        });
        </script>
</html>
