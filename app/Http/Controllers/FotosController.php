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
        $foto = DB::select('select f.id as fotoid,precio,correo_electronico,nombres,apellidos,image,c.id as clienteid from clients c inner join fotos f on c.id=f.client_id');
        return view('fotos.index', compact('foto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_infantil()
    {
        $clientes = Clientes::all();
        return view('fotos.infantil', compact('clientes'));
    }

    public function create_infantil_larga()
    {
        $clientes = Clientes::all();
        return view('fotos.infantil_larga', compact('clientes'));
    }

    public function create_credencial()
    {
        $clientes = Clientes::all();
        return view('fotos.credencial', compact('clientes'));
    }

    public function create_cartilla()
    {
        $clientes = Clientes::all();
        return view('fotos.cartilla', compact('clientes'));
    }

    public function create_credencial_larga()
    {
        $clientes = Clientes::all();
        return view('fotos.credencial_larga', compact('clientes'));
    }

    public function create_ovalo_credencial()
    {
        $clientes = Clientes::all();
        return view('fotos.ovalo_credencial', compact('clientes'));
    }

    public function create_pasaporte()
    {
        $clientes = Clientes::all();
        return view('fotos.pasaporte', compact('clientes'));
    }

    public function create_visa()
    {
        $clientes = Clientes::all();
        return view('fotos.visa', compact('clientes'));
    }

    public function create_patente_visita()
    {
        $clientes = Clientes::all();
        return view('fotos.patente_visita', compact('clientes'));
    }

    public function create_ovalo_diploma()
    {
        $clientes = Clientes::all();
        return view('fotos.ovalo_diploma', compact('clientes'));
    }

    public function create_ovalo_titulo()
    {
        $clientes = Clientes::all();
        return view('fotos.ovalo_titulo', compact('clientes'));
    }

    public function create_postal()
    {
        $clientes = Clientes::all();
        return view('fotos.postal', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_infantil(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.infantil_larga',compact('id'));
    }

    public function store_infantil_larga(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.credencial',compact('id'));
    }

    public function store_credencial(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.cartilla',compact('id'));
    }

    public function store_cartilla(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.credencial_larga',compact('id'));
    }

    public function store_credencial_larga(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.ovalo_credencial',compact('id'));
    }

    public function store_ovalo_credencial(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.pasaporte',compact('id'));
    }

    public function store_pasaporte(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.visa',compact('id'));
    }

    public function store_visa(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.patente_visita',compact('id'));
    }

    public function store_patente_visita(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.ovalo_diploma',compact('id'));
    }

    public function store_ovalo_diploma(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.ovalo_titulo',compact('id'));
    }

    public function store_ovalo_titulo(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.postal',compact('id'));
    }

    public function store_postal(Request $request)
    {
        $foto = request()->except('_token');

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imagen) {
                $foto['image'] = $imagen->store('public');
                Foto::insert($foto);
            }
        }

        $id=$request->client_id;
        return view('fotos.index',compact('id'));
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

        $foto = Foto::find($id);

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

        return redirect()->route('fotos.index');

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
    
    public function verPrecio($id){
        
        $foto = DB::select('select * from fotos where id=?',[$id]);

        return response()->json($foto);

    }
}
