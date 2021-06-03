@extends('layouts.appD')
@section('navegacion')
    @include('iu.naveDifucion')

@endsection
@section('content')


    <!-- component -->
    <div class="min-w-screen min-h-screen bg-gray-100 flex flex-col items-center justify-center">
        <div class="w-5/6 lg:w-3/6 rounded-xl bg-gradient-to-b from-blue-600 to-blue-400 mr-3">
            <div class="flex flex-col">
                <div id="header" class="flex flex-col items-center justify-center text-white py-4 bg-blue-800">
                    <div class="text-center uppercase text-2xl">ACTUALIZAR DATOS</div>
                    <div class="text-sm">
                        <a class="hover:underline" href="https://codepen.io/webgleb/full/GRNdeLv" target="_blank">Inserta los datos</a>
                    </div>
                </div>

                <div id="converters-area" class="px-4 py-5">
                    <div class="flex flex-col text-white">

                        aqui va el formulario



                        <form method="post" action="{{route('Provedor.update',$proveedor)}}">
                            @csrf
                            @method('PATCH')


                            <label class="block text-base text-black">
                                id_tipo_medio<br>
                                <input title="text" name="id_tipo_medio " value="{{$proveedor->id_tipo_medio}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>
                            <br>

                            <label class="block text-base text-black">
                                representante<br>
                                <input title="text" name="representante" value="{{$proveedor->representante}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>


                            <label class="block text-base text-black">
                                Puesto<br>
                                <input title="text" name="cargo" value="{{$proveedor->cargo}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                escritura<br>
                                <input title="text" name="escritura" value="{{$proveedor->escritura}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                objeto_social<br>
                                <input title="text" name="objeto_social" value="{{$proveedor->objeto_social}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                acreditacion_social<br>
                                <input title="text" name="acreditacion_social" value="{{$proveedor->acreditacion_social}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                INE<br>
                                <input title="text" name="INE" value="{{$proveedor->INE}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                fecha_sat<br>
                                <input title="text" name="fecha_sat" value="{{$proveedor->fecha_sat}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                RFC<br>
                                <input title="text" name="RFC" value="{{$proveedor->RFC}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                PPAPE<br>
                                <input title="text" name="PPAPE" value="{{$proveedor->PPAPE}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                domicilio<br>
                                <input title="text" name="domicilio" value="{{$proveedor->domicilio}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>

                            <label class="block text-base text-black">
                                Proveedores_col<br>
                                <input title="text" name="Proveedores_col" value="{{$proveedor->Proveedores_col}}"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </label>

                            <br>


                            <br>



                            <button


                                class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                                <span>ACTUALIZAR INFORMACION</span>

                            </button>


                        </form>



                    </div>
                </div>
            </div>

        </div>


@endsection

