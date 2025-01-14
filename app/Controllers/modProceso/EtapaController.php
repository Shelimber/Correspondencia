<?php namespace App\Controllers\modProceso;

use App\Controllers\BaseController;
use App\Models\modProceso\EtapaModel;

class EtapaController extends BaseController{

    //LISTAR PROCESO

    public function etapa(){

        $nombreEtapa = new EtapaModel();
        $datos = $nombreEtapa->listarEtapa();
        $proceso = $nombreEtapa->listarProceso();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "proceso" => $proceso,
            "mensaje" => $mensaje
        ];

        return view('modProceso/etapa', $data);
        }

    //CREAR PROCESO
    public function crear(){

        $datos = [
            "nombreEtapa" => $_POST['nombreEtapa'],
            "orden" => $_POST['orden'],
            "procesoId" => $_POST['procesoId']
        ];

        $etapa = new EtapaModel();
        $respuesta = $etapa->insertar($datos);

        if ($respuesta > 0){
            return redirect()->to(base_url(). '/etapa')->with('mensaje','0');
        } else {
            return redirect()->to(base_url(). '/etapa')->with('mensaje','1');
        } 
    } 

    //ELIMINAR PROCESO
    public function eliminar(){

        $etapaId = $_POST['etapaId'];

        $etapa = new EtapaModel();
        $data = ["etapaId" => $etapaId];

        $respuesta = $etapa->eliminar($data);

        if ($respuesta > 0){
            return redirect()->to(base_url(). '/etapa')->with('mensaje','2');
        } else {
            return redirect()->to(base_url(). '/etapa')->with('mensaje','3');
        }
    }

    //ELIMINAR PROCESO
    public function actualizar()
    {
        $datos = [
            "nombreEtapa" => $_POST['nombreEtapa'],
            "orden" => $_POST['orden'],
            "procesoId" => $_POST['procesoId']
        ];

        $etapaId = $_POST['etapaId'];

        $etapa = new EtapaModel();
        $respuesta = $etapa->actualizar($datos, $etapaId);

        $datos = ["datos" => $respuesta];

        if ($respuesta) {
            return redirect()->to(base_url() . '/etapa')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/etapa')->with('mensaje', '5');
        }
    }
    
}

?>