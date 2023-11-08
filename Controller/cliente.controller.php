<?php
require_once 'Model/cliente.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/cliente.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new cliente();
        
        if(isset($_REQUEST['idcliente'])){
            $alm = $this->model->getting($_REQUEST['idcliente']);
        }
        
        require_once 'View/header.php';
        require_once 'View/cliente-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new cliente();
        
        $alm->idcliente = $_REQUEST['idcliente'];
        $alm->nombres = $_REQUEST['Nombres'];
        $alm->apellidoP = $_REQUEST['ApellidoP'];
        $alm->fecha_nmto = $_REQUEST['FechaNacimiento'];
        $alm->direcc = $_REQUEST['Direccion'];
        $alm->telefono = $_REQUEST['Telefono'];
        $alm->email = $_REQUEST['Email'];
        $alm->c_postal = $_REQUEST['C_postal'];

        // SI ID cliente ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA cliente, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idcliente > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idcliente > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcliente']);
        header('Location: index.php');
    }
}
