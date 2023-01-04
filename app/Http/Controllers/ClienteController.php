<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Foto;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('cliente.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['correo'=>'required | email']);

        $foto = DB::table('clients')->where('correo_electronico','=',$request->correo)->first();
        
         if($foto->id>0){

            $cliente = DB::table('fotos')->where('client_id','=',$foto->id)->first();
            
            if ($cliente!="") {

                return redirect('cliente-foto/'.$request->correo);

            } else {
                
                return redirect()->back()->withErrors(['message' => 'Correo no cuenta con ninguna foto']);

            }

        } else{

            return redirect()->back()->withErrors(['message' => 'COrreo electrónico no encontrado']);   

        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($correo){
        $foto = DB::select('select * from clients c inner join fotos f on c.id=f.client_id where c.correo_electronico=?',[$correo]);
        
        //return view('fotos.show', compact('foto'));

        return view('cliente.show',compact('foto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
