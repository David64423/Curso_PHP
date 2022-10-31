<?php

    /* Esta clase requiere la clase Post */

    class ImagePost extends Post{ /*Aqui estamos creando una herencia donde ImagePost tiene todas las propieda-
                                    des de la clase Post */
        private $mensaje;
        private $imagen;
        
        public function __construct($mensaje, $imagen){
            print_r("Sé creo un nuevo objeto ImagePost \n");
            parent::__construct($mensaje);
            $this->mensaje=$mensaje;
            $this->imagen=$imagen;
        }

        public function getImagen(){
            return $this->imagen;
        }

    }

    

?>