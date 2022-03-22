<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function pass_forgot()
    {
        return view('login/olvidar_pass');
    }

    public function dashboard()
    {
        return view('login/dashboard');
    }

    public function create_account()
    {
        return view('login/create_account');
    }

    public function validar()
    {
        $email = $this->request->getPost("email");
        $contrasena = $this->request->getPost("contrasena");

        $tablaUsuario = new \App\Models\TablaUsuario;
      #  $tablaUsuario = model("TablaUsuario");
      $usuario = $tablaUsuario->login($email,$contrasena);
      if($usuario != null){
        $session = session();
        $session->nombre_completo = $usuario->nombre_completo;
        $session->correo = $usuario->correo;
        
        //route_to("dashboard");
        //Esto redirije por mdeio de un alias
        return redirect()->route('dashboard');

        //Esto redirije por mdeio de una ruta
        //return redirect()->to();

      }
      else{
        return redirect()->to('/');
      }

    }


}
