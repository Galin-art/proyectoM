


@extends('layouts.appD')
{{--@section('navegacion')--}}
{{--    @include('iu.naveDifucion')--}}

{{--@endsection--}}
@section('content')






    <!-- component -->
    <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
        <div class="top h-64 w-full bg-blue-600 overflow-hidden relative" >
            <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
{{--                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="h-24 w-24 object-cover rounded-full">--}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>


                <h1 class="text-2xl font-semibold">{{$detalleTv->representante}}</h1>
                <h4 class="text-sm font-semibold">{{$detalleTv->cargo}}</h4>
            </div>
        </div>
        <div class="grid grid-cols-12 bg-white ">

            <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

                <a href="{{route('ruta.difucionproveedorestv')}}" class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold">volver</a>

                <a href="{{route('editarProvedoresTv',$detalleTv)}}" class="text-sm p-2 bg-green-500 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">EDITAR INFORMACION</a>

{{--                <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Another Something</a>--}}

            </div>

            <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                <div class="px-4 pt-4">
                    <form action="#" class="flex flex-col space-y-8">

                        <div>
                            <h3 class="text-2xl font-semibold">INFORMACION</h3>
                            <hr>
                        </div>

{{--                        <div class="form-item">--}}
{{--                            <label class="text-xl ">id_tipo_medio</label>--}}
{{--                            <input type="text" value="Antonia P. Howell" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" disabled>--}}
{{--                        </div>--}}

                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">id_tipo_medio</label>
                                <input type="text" value="{{$detalleTv->id_tipo_medio}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">razon_social</label>
                                <input type="text" value="{{$detalleTv->razon_social}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>
                        </div>


                        <div class="form-item">
                            <label class="text-xl ">representante</label>
                            <input type="text" value="{{$detalleTv->representante}}"
                                   class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200"
                                   disabled>
                        </div>


                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">Puesto</label>
                                <input type="text" value="{{$detalleTv->cargo}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">escritura</label>
                                <input type="text" value="{{$detalleTv->escritura}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">objeto_social</label>
                                <input type="text" value="{{$detalleTv->objeto_social}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">acreditacion_social</label>
                                <input type="text" value="{{$detalleTv->acreditacion_social}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>
                        </div>


                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">INE</label>
                                <input type="text" value="{{$detalleTv->INE}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">fecha_sat</label>
                                <input type="text" value="{{$detalleTv->fecha_sat}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>
                        </div>


                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">RFC</label>
                                <input type="text" value="{{$detalleTv->RFC}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">PPAPE</label>
                                <input type="text" value="{{$detalleTv->PPAPE}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                            <div class="form-item w-full">
                                <label class="text-xl ">domicilio</label>
                                <input type="text" value="{{$detalleTv->domicilio}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>

                            <div class="form-item w-full">
                                <label class="text-xl ">Proveedores_col</label>
                                <input type="text" value="{{$detalleTv->Proveedores_col}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
                            </div>
                        </div>




















@endsection

