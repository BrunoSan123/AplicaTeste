<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;


class mailData extends Controller
{
    private $nome;
    private $telefone;
    private $cargo_desejado;
    private $escolaridade; 
    private $email;


    public function __construct(Request $request){
        $this->nome =$request->nome;
        $this->telelefone =$request->telefone;
        $this->cargo_desejado =$request->cargo_desejado;
        $this->escolaridade =$request->escolaridade;
        $this->email =$request->email;
        

    }


    public function enviarEmail(){
        $data=array(
            'nome'=>$this->nome,
            'email'=>$this->email,
            'telefone'=>$this->telefone,
            'cargo_desejado'=>$this->cargo_desejado,
            'escolaridade'=>$this->escolaridade,
            //'arquivo'=>$fileNameStore



        );

        Mail::to(config('mail.from.address'))->send(new SendMail($data));

        
    }
}
