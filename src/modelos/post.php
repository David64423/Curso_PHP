<?php
//Creación de la primera clase

    /* Esta clase requiere la clase UUID */
    
    class Post{

        private string $id; /* Esto es para que lo único que se pueda poner sea un string */

        private $likes;

        private $mensaje;


        public function __construct($mensaje){
            print_r("Se creo un nuevo objeto Post \n");
            
            $this->id = UUID::generate(); /* lOS :: son para accerder a algo dentro de esta clase */
            $this->mensaje = $mensaje;
        }


        
        protected function saludo(){
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
            return $this->mensaje;
        }
    }
    ?>