<?php

namespace App\Models;

use CodeIgniter\Model;

class TablaUsuario extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuarios';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ["nombre","paterno","paterno","correo","contrasenia"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'date';
    protected $createdField  = 'fecha_creacion';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'fecha_eliminacion';

    public function login($correo,$contrasena){


      //d($correo);
      //dd($contrasena);
      $usuario = $this->select("CONCAT(nombre,'',paterno,'',materno) as nombre_completo, correo")
                       ->where("correo",$correo)
                       //->where("contrasenia",$contrasena)
                       ->where("contrasenia",hash("sha256",$contrasena))
                       ->first();

      if($usuario != null){
        return $usuario;
      }
      else{

        return null;
      }
    }


    // Validation
  #  protected $validationRules      = [];
  #  protected $validationMessages   = [];
  #  protected $skipValidation       = false;
  #  protected $cleanValidationRules = true;

    // Callbacks
  #  protected $allowCallbacks = true;
  #  protected $beforeInsert   = [];
  #  protected $afterInsert    = [];
  #  protected $beforeUpdate   = [];
  #  protected $afterUpdate    = [];
  #  protected $beforeFind     = [];
  #  protected $afterFind      = [];
  #  protected $beforeDelete   = [];
  #  protected $afterDelete    = [];
}
