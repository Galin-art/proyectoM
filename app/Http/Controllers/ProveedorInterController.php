<?php

namespace App\Http\Controllers;

use App\Models\ProveedorInter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ProveedorInterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DatosProvedoresInter=ProveedorInter::all();

        return view ('DIFUCIÓN.listaproveedoresinternet',compact('DatosProvedoresInter'));
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
        ProveedorInter::create([
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
        return redirect()->route('ruta.difucionproveedoresinternet');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProveedorInter  $proveedorInter
     * @return \Illuminate\Http\Response
     */
    public function show(ProveedorInter $proveedorInter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProveedorInter  $proveedorInter
     * @return \Illuminate\Http\Response
     */
    public function edit(ProveedorInter $proveedorInter)
    {
        //
        return view('DIFUCIÓN.editarProvedorInter',compact('proveedorInter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProveedorInter  $proveedorInter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedorInter $proveedorInter)
    {
        //

        $proveedorInter->id_tipo_medio=request('id_tipo_medio');
        $proveedorInter->razon_social=request('razon_social');
        $proveedorInter->representante=request('representante');
        $proveedorInter->cargo=request('cargo');
        $proveedorInter->escritura=request('escritura');
        $proveedorInter->objeto_social=request('objeto_social');

        $proveedorInter->acreditacion_social=request('acreditacion_social');

        $proveedorInter->INE=request('INE');
        $proveedorInter->fecha_sat=request('fecha_sat');
        $proveedorInter->RFC=request('RFC');
        $proveedorInter->PPAPE=request('PPAPE');
        $proveedorInter->domicilio=request('domicilio');
        $proveedorInter->Proveedores_col=request('Proveedores_col');
        $proveedorInter->save();
        return redirect()->route('ruta.difucionproveedoresinternet');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProveedorInter  $proveedorInter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProveedorInter $proveedorInter)
    {
        //

        $proveedorInter->delete();
        return redirect()->route('ruta.difucionproveedoresinternet');

    }

    public function FormularioAgregarTv(){
        return view('DIFUCIÓN.añadirProveedoresInter');
    }


    public function detalles($id){
        $detalleInter=ProveedorInter::find($id);
        return view('DIFUCIÓN.detalleProvedorInter',compact('detalleInter'));

    }

    //    genefrar pdf

    public function detallesInter($id){
        $detalle=ProveedorInter::find($id);
        return view('DIFUCIÓN.generarPdfInter',compact('detalle'));

    }


    public function decargarInterPdf($id){
        $detalle=ProveedorInter::find($id);
        $pdf=PDF::loadView('DIFUCIÓN.generarPdfInter',compact('detalle'));
        return $pdf->download('generadoInternet.pdf');
    }





}
