<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Clientes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = DB::select('select f.id as fotoid,correo_electronico,nombres,apellidos,image,c.id as clienteid from clients c inner join fotos f on c.id=f.client_id');
        return view('fotos.index', compact('foto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('fotos.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }


        return redirect()->route('fotos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $foto = DB::select('select * from clients c inner join fotos f on c.id=f.client_id where c.id=?',[$id]);
        
        return view('fotos.show', compact('foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::all();

        $foto = Foto::findOrFail($id);

        return view('fotos.edit', compact('foto', 'clientes'));
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
        $datosFoto = request()->except(['_token', '_method']);
        if ($request->hasFile('image')) {
            Storage::delete('public/folder_fotos/' . $request->fotoborrar);
           $data=['image'=>$request->image->store('public/folder_fotos')]; 
        }

        Foto::where('id', '=', $id)->update($data);

        return redirect('fotos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::findOrFail($id);

        if (unlink(public_path()."/storage/".$foto->image)) {
            Foto::destroy($id);
        }

        return redirect('fotos');
    }
}
