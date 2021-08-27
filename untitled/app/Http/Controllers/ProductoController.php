<?php

namespace App\Http\Controllers;

use App\Http\Model\ProductoModel;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    // mostrar todos los productos
    public function mostrar(){
        try {
            $model = new ProductoModel();
            $lista = $model->mostarTodos();

            return array(
              "codigo: " => 201,
                "datos: " => $lista,
                "mensaje: " => "La consulta se ha jecutado correctamente."
            );

        }catch (\Exception $exception){

            return array(
                "codigo: " => 501,
                "datos: " => $exception->getMessage(),
                "mensaje: " => "Error."
            );
        }
    }

    // mostrar producto por id
    public function delete(Request $request){
        // Debugger
        //dd($request);

        try {

            $model = new ProductoModel();
            $lista = $model->deleteId($request);

            return array(
                "codigo: " => 201,
                "datos: " => $lista,
                "mensaje: " => "La consulta se ha jecutado correctamente."
            );

        }catch (\Exception $exception){

            return array(
                "codigo: " => 501,
                "datos: " => $exception->getMessage(),
                "mensaje: " => "Error"
            );
        }
    }

    // registrar nuevo producto
    public function guardar(Request $request){
        try {
            $model = new ProductoModel();
            $lista = $model->guardar($request);

            return array(
                "codigo: " => 201,
                "datos: " => $lista,
                "mensaje: " => "La consulta se ha jecutado correctamente."
            );

        }catch (\Exception $exception){

            return array(
                "codigo: " => 501,
                "datos: " => $exception->getMessage(),
                "mensaje: " => "Error."
            );
        }
    }


}
