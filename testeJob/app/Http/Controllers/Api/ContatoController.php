<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario;


class ContatoController extends Controller
{
    public function criar(Request $request){
        
        try {


            //upload do documento
            if($request->hasFile('arquivo')){
                $fileNameExt =$request->file('arquivo')->getClientOriginalName();
                $fileName =pathinfo($fileNameExt,PATHINFO_FILENAME);
                $extension =$request->file('arquivo')->getClientOriginalExtension();
                $fileNameStore =$fileName.'_'.time().'.'.$extension;
                $path =$request->file('arquivo')->storeAS('public\arquivo',$fileNameStore);
            }else{
                $fileNameStore ='noDocs.pdf';
            }
           

            $form = new Formulario();
            $form->nome=$request->nome;
            $form->telefone=$request->telefone;
            $form->email=$request->email;
            $form->cargo_desejado=$request->cargo_desejado;
            $form->escolaridade=$request->escolaridade;
            $form->arquivo =$fileNameStore;

            

            $form->save();
            
            return['retorno'=>'ok'];
        } catch (\Throwable $th) {
            return['error'=>'error','detalhes'=>$th->getMessage()];
            
        }
    }

    public function listar(){
        $form = Formulario::all();

        return $form;
    }

    public function show($id){
        $form=Formulario::find($id);

        return $form;

    }


}
