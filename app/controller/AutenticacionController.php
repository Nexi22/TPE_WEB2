<?php
require_once "app/view/AutenticacionView.php";
require_once "app/model/AutenticacionModel.php";
class AutenticacionController{
    private $model;
    private $view;

    public function __construct(){
        $this->view = new AutenticacionView();
        $this->model = new AutenticacionModel();
    }

    function MostrarLogin(){
        $this->view->MostrarLogin();
    }

    function verificar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!empty($_POST['email'])&& !empty($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $usuario = $this->model->obtenerUsuario($email);

                if($usuario && password_verify($password, $usuario->password )){

                    session_start();
                    $_SESSION['USERNAME'] = $usuario->email;
                    $_SESSION['IS_LOGGED'] = true;
                    $_SESSION['ROLE'] = $usuario->rol;

                    header("Location:" .BASE_URL. "nosotros");
                    die();
                }else{
                    $this->view->MostrarLogin("usuario incorrecto");
                }
            }else{
                $this->view->MostrarLogin("faltan datos obligatorios");

        
            }
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location:" .BASE_URL. "login");

    }
}