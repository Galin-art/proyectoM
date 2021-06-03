<?php

namespace App\Http\Controllers;

use App\Models\Proveedortv;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ProveedortvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DatosProvedoresTv=Proveedortv::all();
//        return $DatosProvedoresTv;
        return view ('DIFUCIÓN.listaproveedorestelevision',compact('DatosProvedoresTv'));
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


        Proveedortv::create([
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
        return redirect()->route('ruta.difucionproveedorestv');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedortv  $proveedortv
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedortv $proveedortv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedortv  $proveedortv
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedortv $proveedortv)
    {
        //
        return view('DIFUCIÓN.editarProvedorTv',compact('proveedortv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedortv  $proveedortv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedortv $proveedortv)
    {
        //
//        return $request;
        $proveedortv->id_tipo_medio=request('id_tipo_medio');
        $proveedortv->razon_social=request('razon_social');
        $proveedortv->representante=request('representante');
        $proveedortv->cargo=request('cargo');
        $proveedortv->escritura=request('escritura');
        $proveedortv->objeto_social=request('objeto_social');

        $proveedortv->acreditacion_social=request('acreditacion_social');

        $proveedortv->INE=request('INE');
        $proveedortv->fecha_sat=request('fecha_sat');
        $proveedortv->RFC=request('RFC');
        $proveedortv->PPAPE=request('PPAPE');
        $proveedortv->domicilio=request('domicilio');
        $proveedortv->Proveedores_col=request('Proveedores_col');
        $proveedortv->save();
        return redirect()->route('ruta.difucionproveedorestv');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedortv  $proveedortv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedortv $proveedortv)
    {
        //
        $proveedortv->delete();
        return redirect()->route('ruta.difucionproveedorestv');


    }

    public function FormularioAgregarTv(){
        return view('DIFUCIÓN.añadirProveedoresTv');
    }

    public function detalles($id){
        $detalleTv=Proveedortv::find($id);
        return view('DIFUCIÓN.detalleProvedorTv',compact('detalleTv'));

    }



    //    genefrar pdf

    public function detallesTv($id){
        $detalle=Proveedortv::find($id);
        return view('DIFUCIÓN.generarPdfTv',compact('detalle'));

    }


    public function decargarTvPdf($id){
        $detalle=Proveedortv::find($id);
        $pdf=PDF::loadView('DIFUCIÓN.generarPdfTv',compact('detalle'));
        return $pdf->download('generadoTv.pdf');
    }







}
