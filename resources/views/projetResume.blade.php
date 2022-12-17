<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projet de déploiment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                        <div class="flex flex-wrap">
                            <div class="w-full p-6 h-full">
                                <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5 text-center">
                                    SITE : {{ $projet->projectName }} BASE :{{ $projet->baseSerial }}
                                </div>
                                <span id="idModule" hidden>{{ $projet->idProjet }}</span>
                                <div class="flex flex-wrap">
                                    <div id="logo" class="mt-1 w-1/4 p-2" >

                                        <x-label for="apercu" :value="__('')" />
                                        <img  id="frame" src="{{ URL::asset( $projet->logoChemin )}}"  class="border-opacity-0 mt-1 w-full p-2 bg-white rounded-lg shadow-lg "/>
                                    </div>
                                    <div id="modules" class="mt-1 w-3/4  p-2" >

                                        <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                            <button style="width:15%;"><img id="mikadologo" src="{{ URL::asset('/img/Mikado.png')}}" alt="" class="opacity-25"> Mikado</button>
                                            <button style="width:15%;"><img id="diabolologo" src="{{ URL::asset('/img/Diabolo.png')}}" alt="" class="opacity-25">Diabolo</button>
                                            <button style="width:15%;"><img id="cogitologo" src="{{ URL::asset('/img/Cogito.png')}}" alt="" class="opacity-25">Cogito</button>
                                            <button style="width:15%;"><img id="mentalologo" src="{{ URL::asset('/img/Mentalo.png')}}" alt="" class="opacity-25">Mentalo</button>
                                            <button style="width:15%;"><img id="lasidologo" src="{{ URL::asset('/img/Lasido.png')}}" alt="" class="opacity-25">Lasido</button>
                                            <button style="width:15%;"><img id="jeudemologo" src="{{ URL::asset('/img/Jeudemo.png')}}" alt="" class="opacity-25">Jeudemo</button>
                                            {{-- <img src="/img/modifier.png" style="height:50px;" alt=""> --}}
                                        </div>
                                        <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                            <button style="width:15%;"><img id="mikadologo" src="{{ URL::asset('/img/Mikado.png')}}" alt="" class="opacity-25"> Mikado</button>
                                            <button style="width:15%;"><img id="diabolologo" src="{{ URL::asset('/img/Diabolo.png')}}" alt="" class="opacity-25">Diabolo</button>
                                            <button style="width:15%;"><img id="cogitologo" src="{{ URL::asset('/img/Cogito.png')}}" alt="" class="opacity-25">Cogito</button>
                                            <button style="width:15%;"><img id="mentalologo" src="{{ URL::asset('/img/Mentalo.png')}}" alt="" class="opacity-25">Mentalo</button>
                                            <button style="width:15%;"><img id="lasidologo" src="{{ URL::asset('/img/Lasido.png')}}" alt="" class="opacity-25">Lasido</button>
                                            <button style="width:15%;"><img id="jeudemologo" src="{{ URL::asset('/img/Jeudemo.png')}}" alt="" class="opacity-25">Jeudemo</button>
                                            {{-- <img src="/img/modifier.png" style="height:50px;" alt=""> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="w-full p-6 h-full">
                                <div class="flex flex-wrap">

                                     <form class=" mt-4 w-full flex flex-wrap" action="{{ route('savePassation',[$projet->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class=" mt-4 w-full ">
                                            {{-- <button onclick="location.href='{{ url('dashboard') }}'" class=" uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                             focus:outline-none text-xs py-3 px-4 rounded font-bold">
                                             Editer la Passation Formateur
                                           </button> --}}
                                           <button class=" uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                             focus:outline-none text-xs py-3 px-4 rounded font-bold">
                                             Sauvegarder la Passation Formateur
                                           </button>

                                        </div>
                                            <div id="gene"  class="mt-1 w-2/4  p-2" >
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Généralités</div>
                                                    <textarea  name ="generalites" class="editor"> @if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->generalites }}
                                                        @else

                                                        @endif
                                                        </textarea>
                                                </div>
                                            </div>
                                            <div id="client"   class="mt-1 w-2/4  p-2" >
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Client</div>
                                                    <textarea  name = "client" class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->client }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>

                                            <div id="mikado"  class="mt-1 w-2/4  p-2" hidden>
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Mikado</div>
                                                    <textarea  name = "mikado"  class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->mikado }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>

                                            <div id="diabolo"   class="mt-1 w-2/4  p-2" hidden >
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Diabolo</div>
                                                    <textarea name = "diabolo" class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->diabolo }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>
                                            <div id="cogito"   class="mt-1 w-2/4  p-2" hidden>
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Cogito</div>
                                                    <textarea name = "cogito" class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->cogito }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>
                                            <div id="mentalo"   class="mt-1 w-2/4  p-2" hidden>
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Mentalo</div>
                                                    <textarea name = "mentalo" class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->mentalo }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>
                                            <div id="lasido"   class="mt-1 w-2/4  p-2" hidden>
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Lasido</div>
                                                    <textarea name = "lasido" class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->lasido }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>
                                            <div id="jeudemo"   class="mt-1 w-2/4  p-2" hidden>
                                                <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                                    <div>Jeudemo</div>
                                                    <textarea name = "jeudemo" class="editor">@if (!$projet->getPassation==null)
                                                        {{ $projet->getPassation->jeudemo }}
                                                        @else

                                                        @endif</textarea>
                                                </div>
                                            </div>

                                    </form>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Import Trumbowyg -->
<script src="trumbowyg/dist/trumbowyg.min.js"></script>


<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

    $('.editor').trumbowyg({


    });

        $("#mikadologo").click(function() {

            if ($(this).hasClass("opacity-25")){
                $("#mikado").prop("hidden",false);
                resetButton($(this));
            }else{
                $("#mikado").prop("hidden",true);
                $(this).addClass("opacity-25")
            }

        });

        $("#diabolologo").click(function() {
            if ($(this).hasClass("opacity-25")){
                $("#diabolo").prop("hidden",false);
                resetButton($(this));
            }else{
                $("#diabolo").prop("hidden",true);
                $(this).addClass("opacity-25")
            }

        });

        $("#cogitologo").click(function() {
            if ($(this).hasClass("opacity-25")){
                $("#cogito").prop("hidden",false);
                resetButton($(this));
            }else{
                $("#cogito").prop("hidden",true);
                $(this).addClass("opacity-25")
            }

        });

        $("#mentalologo").click(function() {
            if ($(this).hasClass("opacity-25")){
                $("#mentalo").prop("hidden",false);
                resetButton($(this));
            }else{
                $("#mentalo").prop("hidden",true);
                $(this).addClass("opacity-25")
            }

        });

        $("#lasidologo").click(function() {
            if ($(this).hasClass("opacity-25")){
                $("#lasido").prop("hidden",false);
                resetButton($(this));
            }else{
                $("#lasido").prop("hidden",true);
                $(this).addClass("opacity-25")
            }

        });

        $("#jeudemologo").click(function() {
            if ($(this).hasClass("opacity-25")){
                $("#jeudemo").prop("hidden",false);
                resetButton($(this));
            }else{
                $("#jeudemo").prop("hidden",true);
                $(this).addClass("opacity-25")
            }

        });
    });

    function sort(idModule) {

        var idClient = 1;
            // var idClient = $("#idModule").val();
            $.ajax({

                type: 'post',
                url: "{{ url('actions/') }}" + "/" + idModule + "/" + idClient,
                data: {idModule:idModule,idProjet:idClient},
                success: function(data){

                    $("#tableActions").html(data);
                }
            });
    };


    function resetButton(element){
        $(element).removeClass("opacity-25")
    };
 </script>
