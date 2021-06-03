<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosproveedores=Proveedor::all();
      //  return $datosproveedores;
        return  view('DIFUCIÓN.listaproveedores',compact('datosproveedores'));
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
        //





        Proveedor::create([
            'id_tipo_medio'=>request('id_tipo_medio'),
            'razon_social'=>request('razon_social'),
            'representante'=>request('representante'),
            'cargo'=>request('cargo'),
            'escritura'=>request('escritura'),
            'objeto_social'=>request('objeto_social'),
            'acreditacion_social'=>request('acreditacion_social'),
            'INE'=>request('INE'),
            'fecha_sat'=>request('fecha_sat'),
            'RFC'=>request('RFC'),
            'PPAPE'=>request('PPAPE'),
            'domicilio'=>request('domicilio'),
            'Proveedores_col'=>request('Proveedores_col'),


        ]);
        return redirect()->route('ruta.listadifucionproveedores');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        //

//        return $proveedor;
        return view('DIFUCIÓN.editarProvedor',compact('proveedor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //

//        return $request;
        $proveedor->id_tipo_medio=request('id_tipo_medio');
        $proveedor->razon_social=request('razon_social');
        $proveedor->representante=request('representante');
        $proveedor->cargo=request('cargo');
        $proveedor->escritura=request('escritura');
        $proveedor->objeto_social=request('objeto_social');

        $proveedor->acreditacion_social=request('acreditacion_social');

        $proveedor->INE=request('INE');
        $proveedor->fecha_sat=request('fecha_sat');
        $proveedor->RFC=request('RFC');
        $proveedor->PPAPE=request('PPAPE');
        $proveedor->domicilio=request('domicilio');
        $proveedor->Proveedores_col=request('Proveedores_col');
        $proveedor->save();
        return redirect()->route('ruta.listadifucionproveedores');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //

$proveedor->delete();
return redirect()->route('ruta.listadifucionproveedores');

    }

    public function Radio(){

    }
    public function Television(){
        return view ('DIFUCIÓN.añadirproveedorestv');
    }

    public function irProvedor(){
        return view('DIFUCIÓN.añadirproveedores');
    }

    public function actualizar(){
     return view('DIFUCIÓN.editarProvedor');
    }

    public function detalles($id){
    $detalle=Proveedor::find($id);
        return view('DIFUCIÓN.detalleProvedor',compact('detalle'));

    }


}
