<?php
    
    class UUID{

        public static function generate(){ /*Cuando generamos una funcion o un metodo estatico, le decimos a la
                                             clase que podemos acceder a la funcion o metodo sin necesidad de
                                             crear un nuevo objeto*/
                                               
            return uniqid(); //Genera un ID unico
        }
    }
?>