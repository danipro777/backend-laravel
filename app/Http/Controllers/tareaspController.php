<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareasp;

class tareaspController extends Controller
{
    //GET
    public function get(){
        try{
            $data = tareasp::all();
            return response()->json($data, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    //GETBY
    public function getById($id){
        try {
            $data = tareasp::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //POST
    public function create(Request $request){
        try {
            $data['nombre'] = $request['nombre'];
            $data['descripcion'] = $request['descripcion'];
            $res = tareasp::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //PUT
    public function update(Request $request,$id){
        try {
            $data['nombre'] = $request['nombre'];
            $data['descripcion'] = $request['descripcion'];
            tareasp::find($id)->update($data);
            $res = tareasp::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //PUT
    public function updateCompletado(Request $request,$id){
        try {
            $data['estado'] = 'COMPLETADO';
            tareasp::find($id)->update($data);
            $res = tareasp::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //PUT
    public function updateCancelado(Request $request,$id){
        try {
            $data['estado'] = 'CANCELADO';
            tareasp::find($id)->update($data);
            $res = tareasp::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

        //DELETE
        public function delete($id){
            try {
                $res = tareasp::find($id)->delete();
                return response()->json($res , 200);
            } catch (\Throwable $th) {
                return response()->json([ 'error' => $th->getMessage()], 500);
            }
        }
}