<?php 
namespace App\Models\modUsuario;

use CodeIgniter\Model;

class DireccionModel extends Model{

    //MODELO PARA LISTAR DIRECCIONES
    public function listarDireccion()
    {
        $direccion = $this->db->query("SELECT d.direccionId as 'id', p.nombres as 'nombre', d.personaId as 'personaId',
                                        if(d.tipoDireccion = 'P', 'Principal', 'Secundaria') as 'tipoDireccion', 
                                        d.nombreDireccion as 'direccion', m.nombreMunicipio as 'municipio', d.municipioId as 'municipioId'
                                        FROM wk_direccion d
                                        INNER JOIN wk_persona p ON d.personaId = p.personaId
                                        INNER JOIN wk_municipio m ON d.municipioId = m.municipioId
                                        ORDER BY d.direccionId");
        return $direccion->getResult();
    }

    //LISTADO DE PERSONAS
    public function listarPersona()
    {
        $persona =  $this->db->query('SELECT*FROM  wk_persona');
        return $persona->getResult();
    }

    //LISTADO DE MUNICIPIO
    public function listarMunicipio()
    {
        $municipio =  $this->db->query('SELECT*FROM  wk_municipio');
        return $municipio->getResult();
    }

    //MODELO PARA AGREGAR DIRECCION
    public function insertar($datos){

        $nombreDireccion = $this->db->table('wk_direccion');
        $nombreDireccion->insert($datos);

        return $this->db->insertID();
    }

    //MODELO PARA ELIMINAR DIRECCION
    public function eliminar($data){
        $nombres = $this->db->table('wk_direccion');
        $nombres->where($data);
        
        return $nombres->delete();
    }

    //Edita el registro en DIRECCION
    public function actualizar($data, $direccionId){
        $nombres = $this->db->table('wk_direccion');
        $nombres->set($data);
        $nombres->where('direccionId', $direccionId);
        return $nombres->update();
    }

}