<?php
    require 'vendor/autoload.php';
    

    //Creacióm de la primera clase

    class Post{

        private string $id; /* Esto es para que lo único que se pueda poner sea un string */

        private $mensaje;


        public function __construct($mensaje){
            print_r("Se creo un nuevo objeto Post \n");
            $this->id = uniqid();
            $this->mensaje = $mensaje;
        }
        
        private function saludo(){
            return " \n Hola desde este post, con id=".$this->id; /*Con la palabra reservada this le estamos 
                                                                    diciendo que acceda a una variable dentro de
                                                                    la clase */
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setMensaje($mensaje){
            $this->mensaje= $mensaje;
        }

        public function getMensaje(){

        }
    }

    $miObjeto = new Post("Este es mi primer post");

    $miObjeto->getMensaje();
    
    //echo $miObjeto->id; //Esto me devuelve el id

    //$miObjeto->setId("asd123");
    //echo $miObjeto->getId();

    //var_dump($miObjeto);
    
?>