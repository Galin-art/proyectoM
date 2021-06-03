<?php

namespace App\Http\Controllers;

use App\Models\ProveedorImpreso;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ProveedorImpresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DatosProvedoresImpresos=ProveedorImpreso::all();
        return view ('DIFUCIÓN.listaproveedoresimpresos',compact('DatosProvedoresImpresos'));

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
        ProveedorImpreso::create([
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
        return redirect()->route('ruta.difucionproveedoresimpresos');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProveedorImpreso  $proveedorImpreso
     * @return \Illuminate\Http\Response
     */
    public function show(ProveedorImpreso $proveedorImpreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProveedorImpreso  $proveedorImpreso
     * @return \Illuminate\Http\Response
     */
    public function edit(ProveedorImpreso $proveedorImpreso)
    {
        //
        return view('DIFUCIÓN.editarProvedorImpresos',compact('proveedorImpreso'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProveedorImpreso  $proveedorImpreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedorImpreso $proveedorImpreso)
    {
        //
        $proveedorImpreso->id_tipo_medio=request('id_tipo_medio');
        $proveedorImpreso->razon_social=request('razon_social');
        $proveedorImpreso->representante=request('representante');
        $proveedorImpreso->cargo=request('cargo');
        $proveedorImpreso->escritura=request('escritura');
        $proveedorImpreso->objeto_social=request('objeto_social');

        $proveedorImpreso->acreditacion_social=request('acreditacion_social');

        $proveedorImpreso->INE=request('INE');
        $proveedorImpreso->fecha_sat=request('fecha_sat');
        $proveedorImpreso->RFC=request('RFC');
        $proveedorImpreso->PPAPE=request('PPAPE');
        $proveedorImpreso->domicilio=request('domicilio');
        $proveedorImpreso->Proveedores_col=request('Proveedores_col');
        $proveedorImpreso->save();
        return redirect()->route('ruta.difucionproveedoresimpresos');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProveedorImpreso  $proveedorImpreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProveedorImpreso $proveedorImpreso)
    {
        //

        $proveedorImpreso->delete();
        return redirect()->route('ruta.difucionproveedoresimpresos');

    }

    public function FormularioAgregarImpresos(){
        return view('DIFUCIÓN.añadirProveedoresImpresos');
    }

    public function detalles($id){
        $detalleImpreso=ProveedorImpreso::find($id);
        return view('DIFUCIÓN.detalleProvedorImpresos',compact('detalleImpreso'));

    }


//    genefrar pdf

    public function detallesImpreso($id){
        $detalle=ProveedorImpreso::find($id);
        return view('DIFUCIÓN.generarPdfImpresos',compact('detalle'));

    }


    public function decargarImpresoPdf($id){
        $detalle=ProveedorImpreso::find($id);
        $pdf=PDF::loadView('DIFUCIÓN.generarPdfImpresos',compact('detalle'));
        return $pdf->download('generadoImpreso.pdf');
    }



}
