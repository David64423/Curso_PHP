<?php
    require 'vendor/autoload.php';

    
    require "src/utils/uuid.php";
    require "src/modelos/post.php";

    require "src/modelos/imagePost.php";

    require "src/modelos/videoPost.php";
    

    $miObjeto = new Post("Este es mi primer post");
    $postImagen = new ImagePost("Foto de mis vacaciones en la playa","playa.jpg");

   // echo $miObjeto->getMensaje();
    
    //echo $miObjeto->id; //Esto me devuelve el id

    //$miObjeto->setId("asd123");
    //echo $miObjeto->getId();
    //var_dump($miObjeto);

    //$video = new VideoPost();

    


    
?>