<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use PDF;
class AlbumController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $libros = Album::all();
        return view('welcome')->with('libros',$libros);
    }

     public function index()
    {
        $libros = Album::all();
        return view('album.index')->with('libros',$libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libros = new Album();

        $libros->Titulo = $request->get('Titulo');
        $libros->Autor = $request->get('Autor');
        $libros->DescripcionCorta = $request->get('DescripcionCorta');
        $libros->DescripcionLarga = $request->get('DescripcionLarga');
        $libros->barra = $request->get('barra');
        $libros->editorial = $request->get('editorial');
        $libros->pais = $request->get('pais');
        $libros->numeroPaginas = $request->get('numeroPaginas');
        $libros->año = $request->get('año');
        $libros->Portada = $request->get('Portada');

        if($request->hasFile('Portada')){
            $libros['Portada'] = time() . '_' . $request->file(key: 'Portada')->getClientOriginalName();
            $request->file(key: 'Portada')->storeAs(path: 'imagenes', name: $libros['Portada']);
        }

        $libros->save();

        return redirect('/album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Album::find($id);
        return view('album.edit')->with('libro',$libro);
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
        $libro = Album::find($id);

        $libro->Titulo = $request->get('Titulo');
        $libro->Autor = $request->get('Autor');
        $libro->DescripcionCorta = $request->get('DescripcionCorta');
        $libro->DescripcionLarga = $request->get('DescripcionLarga');
        $libro->barra = $request->get('barra');
        $libro->editorial = $request->get('editorial');
        $libro->pais = $request->get('pais');
        $libro->numeroPaginas = $request->get('numeroPaginas');
        $libro->año = $request->get('año');
        $libro->Portada = $request->get('Portada');
        $libro->save();

        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Album::find($id);
        $libro->delete();
        return redirect('/album');
    }

    public function libroShow($id){
        $libro = Album::Where('id','=',$id)->first();

        return view('album.show',array(
            'libro'=>$libro
        ));
    }

    public function makePDF(){
        $libros = Album::all();

        $pdf = PDF::loadview('Dider', compact('libros'));        
        return $pdf->download("Album_WorldOfBooks.pdf");
    }
}
