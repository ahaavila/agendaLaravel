<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ContatoRepository;

class ContatoController extends Controller
{
   protected $contatos;

    //construtor
    public function __construct(ContatoRepository $contatos)
       {
           $this->middleware('auth');
   		     $this->contatos = $contatos;
       }

       public function index(Request $request)
       {
         $contatos = $this->contatos->forUser($request->user());

         return view('contatos.index', [
           'contatos' => $contatos,
         ]);
       }

       public function store(Request $request){
            $this->validate($request, [
                'nome' => 'required|max:255',
                'email' => 'required|max:255',
                'telefone' => 'required|max:30',
              ]);

            $request->user()->contatos()->create([
                    'nome' => $request->nome,
                    'email' => $request->email,
                    'telefone' => $request->telefone,
            ]);

            return redirect('/contatos');
       }

      public function destroy(Request $request, Contato $contato){
     		   $this->authorize('destroy', $contato);
     		   $contato->delete();
     		   return redirect('/contatos');
     	}

}
