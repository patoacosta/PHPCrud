<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductoModel extends Model
{
    public function mostarTodos(){
    $lista = DB::table('productos')->get();

    return $lista;
    }

    public function deleteId($requestBody){

        $lista = DB::table('productos')
            ->where('productoid', '=', $requestBody->id)
            ->delete();

        return $lista;
    }

    public function guardar($requestBody){

        if($requestBody->PRODUCTOID){

            $lista = DB::table('productos')
                ->where('productoid', '=', $requestBody->PRODUCTOID)
                ->update(array(
                    'PRODUCTOID' => $requestBody->PRODUCTOID,
                    'PROVEEDORID' => $requestBody->PROVEEDORID,
                    'CATEGORIAID' => $requestBody->CATEGORIAID,
                    'DESCRIPCION' => $requestBody->DESCRIPCION,
                    'PRECIOUNIT' => $requestBody->PRECIOUNIT,
                    'EXISTENCIA' => $requestBody->EXISTENCIA
                ));
        }else {
            $lista = DB::table('productos')->insert(array(
                array(
                    //'PRODUCTOID' => $requestBody->PRODUCTOID,
                    'PROVEEDORID' => $requestBody->PROVEEDORID,
                    'CATEGORIAID' => $requestBody->CATEGORIAID,
                    'DESCRIPCION' => $requestBody->DESCRIPCION,
                    'PRECIOUNIT' => $requestBody->PRECIOUNIT,
                    'EXISTENCIA' => $requestBody->EXISTENCIA
                )));
        }
        return $lista;
    }

}
