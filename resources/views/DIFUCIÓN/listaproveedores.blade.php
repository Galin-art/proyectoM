@extends('layouts.appD')
@section('navegacion')
    @include('iu.naveDifucion')

@endsection
@section('content')

{{--    <div class="w-full h-10 pl-3 pr-2 bg-white border rounded-full flex justify-between items-center relative">--}}
{{--        <label for="name" class=" w-full">--}}


{{--        <input type="text" name="name" id="name" placeholder="Search"--}}
{{--               class="appearance-none w-full outline-none focus:outline-none active:outline-none"/>--}}
{{--        </label>--}}

{{--        <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">--}}
{{--            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                 viewBox="0 0 24 24" class="w-6 h-6">--}}
{{--                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}




    <h1 class="text-2xl text-center mt-10">Lista de Provedores</h1>

    <div class="">
        <p></p>
        <a href="{{route('ruta.iraproveedores')}}">
            <button
                class="text-white px-4 w-auto h-10 bg-red-600 rounded-full hover:bg-red-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
                <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
                    <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                    C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                    C15.952,9,16,9.447,16,10z" />
                </svg>
                <span>Agregar nuevo</span>
            </button>
        </a>
    </div>

    <BR>
    <table class="border-collapse w-full">
        <thead>


        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">REPRESENTANTE</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">INE</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">CARGO</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">RFC</th>
{{--            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">RAZON SOCIAL</th>--}}
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ACCIONES</th>
        </tr>
        </thead>

        <tbody>
        @forelse($datosproveedores as $lis)


            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">REPRESENTANTE</span>

                    <a>{{$lis->representante}}</a>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">INE</span>
                    <a> {{$lis->INE}}</a>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">CARGO</span>
                    <a> {{$lis->cargo}}</a>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">RFC</span>
                    <a> {{$lis->RFC}}</a>
                </td>
{{--                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">--}}
{{--                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">RAZON SOCIAL</span>--}}
{{--                    <a> {{$lis->id}}</a>--}}



                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
{{--                    <a href="{{route('BeneficiarioInformacion', $lis)}}">--}}
                    <div class="flex justify-start  space-x-4">





                        <a href="{{route('ProvedorDetalle',$lis)}}" >

                            <button


                                class="bg-green-400  hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>


                                <span>ver</span>
                            </button>

                        </a>












                    <a href="{{route('editarProvedores',$lis)}}" >

                        <button


                            class="bg-blue-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                <path fill-rule="evenodd"
                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                      clip-rule="evenodd"/>
                            </svg>


                            <span>editar</span>
                        </button>

                    </a>





                    <a >





                        <form method="POST" action="{{route('Provedor.destroy',$lis)}}">
                            @csrf
                            @method('DELETE')

                            <button


                                class="bg-red-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <span>Eliminar</span>
                            </button>

                        </form>


                    </a>

                        <a href="{{route('GenerarPdfhecho',$lis)}}" >

                            <button


                                class="bg-purple-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center  ">


                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                          clip-rule="evenodd"/>
                                </svg>


                                <span>Generar pdf</span>
                            </button>

                        </a>








                    </div>



                </td>
            </tr>


        @empty

        @endforelse

        </tbody>
    </table>



    <br>
{{--    {{$listaBene->links() }}--}}






@endsection
