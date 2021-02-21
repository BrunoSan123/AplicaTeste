<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Formulario2;



class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('modelos.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' =>'required',
            'email' =>'required|email',
            'telefone'=>'required',
            'cargo_desejado'=>'required',
            'escolaridade'=>'required',
            'arquivo'=>'required|mimes:docx,pdf,doc|max:1000'


        ]);



        try {
       /*  $ip =gethostbyaddr($_SERVER['REMOTE_ADDR']); */

          // nome teste o gethostbyaddr vaip com o nome do container 
         //que meu serviço de internet utiliza para distribuir o ip
        //então vou deixar apenas o
       //upload do documento REMOTE_ADDR,no caso,me trouxe o ip do meu host

         


           $ip =$_SERVER['REMOTE_ADDR'];
           if($request->hasFile('arquivo')){
            $fileNameExt =$request->file('arquivo')->getClientOriginalName();
            $fileName =pathinfo($fileNameExt,PATHINFO_FILENAME);
            $extension =$request->file('arquivo')->getClientOriginalExtension();
            $fileNameStore =$fileName.'_'.time().'.'.$extension;
            $path =$request->file('arquivo')->storeAS('public\arquivo',$fileNameStore);
        }else{
            $fileNameStore ='noDocs.pdf';
        }
            
            $form = new Formulario2();
            $form->nome=$request->nome;
            $form->telefone=$request->telefone;
            $form->email=$request->email;
            $form->cargo_desejado=$request->cargo_desejado;
            $form->escolaridade=$request->escolaridade;
            $form->arquivo =$fileNameStore;
            $form->ip =$ip;
        

         $contato = new mailData($request);

         $contato->enviarEmail();

         $form->save();
  
         return back()->with('success','Obrigado por se cadastrar');
        } catch (\Throwable $th) {
            return $th->getMessage();
        } 


      
       
       
        
         


    }

   
}
