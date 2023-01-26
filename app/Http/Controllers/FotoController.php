<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Foto;

class FotoController extends Controller
{

    public function show()
    {
        $data = Foto::all();
        //  dd($data);
        return view('gallery',[
            'data' => $data
    ]);
    }

    public function showSingle(Foto $foto)
    {
        //  $data = Foto::find();
        // dd($foto);
         $data = Foto::where('nama', $foto->nama)->take(5)->get();
        //  dd($data);
        return view('gallery-single',[
            'foto' => $foto,
            'data' => $data
    ]);
    }
    
    public function index()
    {
        $data = Foto::all();
        // dd($data);
        return view('dashboard.foto.index',[
            'data' => $data
    ]);
    }

    public function detail(Foto $foto)
    {
        // dd($foto);
        return view('dashboard.foto.detail',[
            'data' => $foto
        ]);
    }

    public function create()
    {
        return view('dashboard.foto.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData=$request->validate([
            'nama'=>'required|max:255',
            'title'=>'required|max:255',
            'deskripsi'=>'required',
            'image'=>'image'
        ]);
        $validatedData['image']= $request->file('image')->store('gallery-images');
        // dd($validatedData);
        Foto::create($validatedData);
        return redirect('/master/foto');
    }

    public function edit(Foto $foto)
    {
        return view('dashboard.foto.update',[
            'foto' => $foto
        ]);
    }

    public function update(Request $request, Foto $foto)
    {
        // dd($request->all());
        $validatedData=$request->validate([
            'nama'=>'required|max:255',
            'title'=>'required|max:255',
            'deskripsi'=>'required',
            'image'=>'image'
        ]);
        $validatedData['image']= $request->file('image')->store('gallery-images');
        // dd($validatedData);
        Foto::where('_id',$foto->_id)->update($validatedData);
        return redirect('/master/foto');
    }

    public function destroy(Foto $foto){
        Storage::delete($foto->image);
        Foto::destroy($foto->_id);
        return redirect('/master/foto');
    }

}  
