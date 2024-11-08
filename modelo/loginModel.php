<?php 

class loginModel{
    
    public function authenticate($usuario, $contrasena) {
        // Credenciales para el empleado
        if ($usuario === 'maurivera' && $contrasena === 'mau12304') {
            return 'empleado';
        }
        // Credenciales para un cliente (cualquier otro usuario)
        return 'cliente';
    }
}

?>