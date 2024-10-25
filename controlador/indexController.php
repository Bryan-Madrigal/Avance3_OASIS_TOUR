<?php
class IndexController {
    public function mostrarPaginaPrincipal() {
        // Cargar el modelo
        require_once 'modelo/indexModel.php';
        $modelo = new IndexModel();
        
        // Obtener datos del modelo (esto puede ser dinámico)
        $datos = $modelo->obtenerDatos();

        // Cargar la vista y pasar los datos
        require_once 'vista/indexVista.php';
    }
}
?>
