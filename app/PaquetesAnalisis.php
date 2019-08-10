<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Hash;


class PaquetesAnalisis extends Authenticatable
{
    use Notifiable;
    use HasRolesAndAbilities;

    protected $fillable = ['id_paquete','id_analisis'];
     public function selectAllAnalisis($id)
    {

        $array='';
        $data = \DB::table('paquetes_analises')
        ->select('*')
        ->where('id_paquete', $id)
        ->get();
        $descripcion='';
        
        
        foreach ($data as $key => $value) {

          $dataanalises = \DB::table('analises')
          ->select('*')
          ->where('id', $value->id_analisis)
          ->get();
          foreach ($dataanalises as $key_analises => $valueservicioanalises) {
            $descripcion.= $valueservicioanalises->name.',';
                          # code...
        }
    }
   // dd($descripcion);

    return substr($descripcion, 0, -1);
              //  return $id;
}
   
    
}
