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
                                    SITE : {{ $projet->projectName }}BASE :{{ $projet->baseSerial }}
                                </div>
                                <span id="idModule" hidden>{{ $projet->idProjet }}</span>
                                <div class="flex flex-wrap">
                                    <div id="logo" class="mt-1 w-1/4 p-2" >

                                        <x-label for="apercu" :value="__('')" />
                                        <img  id="frame" src="{{ URL::asset( $projet->logoChemin )}}"  class="border-opacity-0 mt-1 w-full p-2 bg-white rounded-lg shadow-lg "/>
                                    </div>
                                    <div id="modules" class="mt-1 w-3/4  p-2" >

                                        <div class="border-opacity-0 mt-1 w-full  p-2 bg-white rounded-lg shadow-lg">
                                            <button style="width:15%;"><img id="mikadologo" src="{{ URL::asset('/img/Mikado.png')}}" alt="" > Mikado</button>
                                            <button style="width:15%;"><img id="diabolologo" src="{{ URL::asset('/img/Diabolo.png')}}" alt="" >Diabolo</button>
                                            <button style="width:15%;"><img id="cogitologo" src="{{ URL::asset('/img/Cogito.png')}}" alt="">Cogito</button>
                                            <button style="width:15%;"><img id="mentalologo" src="{{ URL::asset('/img/Mentalo.png')}}" alt="" class="opacity-25">Mentalo</button>
                                            <button style="width:15%;"><img id="lasidologo" src="{{ URL::asset('/img/Lasido.png')}}" alt="" class="opacity-25">Lasido</button>
                                            <button style="width:15%;"><img id="jeudemologo" src="{{ URL::asset('/img/Jeudemo.png')}}" alt="" class="opacity-25">Jeudemo</button>
                                            {{-- <img src="/img/modifier.png" style="height:50px;" alt=""> --}}
                                        </div>

                                    </div>
                                    <div class="flex flex-col mt-8">
                                        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                                                <table class="min-w-full" >
                                                    <thead>
                                                        <tr>

                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                                Client </th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                                Contenu</th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                                Changer le statut de l'action</th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                                Modifier l'action</th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                                Supprimer une action</th>
                                                            <th
                                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                                Début de l'action</th>
                                                        </tr>
                                                        <p>Sélectionnez un module pour filtrer les actions</p>
                                                    </thead>

                                                    <tbody class="bg-white" id="tableActions">
                                                        @include('actions.listeActionTable')
                                                    </tbody>
                                                </table>

                                                

                                                <tfoot>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><svg id="Capa_1" class="w-6 h-6 text-red-400" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="512" y2="0"><stop offset="0" stop-color="#009efd"/><stop offset="1" stop-color="#2af598"/></linearGradient><g><g><g><path d="m222.408 472h-62.408v-60c0-33.084-26.916-60-60-60h-60v-292c0-11.028 8.972-20 20-20h232c11.028 0 20 8.88 20 19.795 0 32.385 0 84.973-.001 142.501 12.74-4.518 26.133-7.638 39.998-9.178l.003-133.323c0-32.971-26.916-59.795-60-59.795h-232c-33.084 0-60 26.916-60 60v320.284l131.716 131.716h127.286c-14.107-11.408-26.464-24.896-36.594-40zm-102.408-28.284-51.716-51.716h31.716c11.028 0 20 8.972 20 20zm252-211.716c-77.196 0-140 62.804-140 140s62.804 140 140 140 140-62.804 140-140-62.804-140-140-140zm0 240c-55.14 0-100-44.86-100-100s44.86-100 100-100 100 44.86 100 100-44.86 100-100 100zm-100-312h-192v40h192zm0-80h-192v40h192zm-192 200h120v-40h-120zm312 32h-40v40h-40v40h40v40h40v-40h40v-40h-40z" fill="url(#SVGID_1_)"/></g></g></g></svg></td>
                                                    </tr>
                                                </tfoot>
                                            </div>
                                        </div>
                                    </div>

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

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

        $("#mikadologo").click(function() {

            if ($(this).parent().hasClass("bg-gradient-to-b")){
                resetButtons();
                console.log("reset");
                sort("all");
            }else{
                resetButtons();
                $(this).parent().addClass("bg-gradient-to-b from-green-200 to-green-100");
                sort(1);
            }

        });

        $("#diabolologo").click(function() {
            if ($(this).parent().hasClass("bg-gradient-to-b")){
                resetButtons();
                console.log("reset");
                sort("all");
            }else{
                resetButtons();
                $(this).parent().addClass("bg-gradient-to-b from-green-200 to-green-100");
                sort(2);
            }
        });

        $("#cogitologo").click(function() {
            if ($(this).parent().hasClass("bg-gradient-to-b")){
                resetButtons();
                console.log("reset");
                sort("all");
            }else{
                resetButtons();
                $(this).parent().addClass("bg-gradient-to-b from-green-200 to-green-100");
                sort(3);
            }
        });

        $("#mentalologo").click(function() {
            if ($(this).parent().hasClass("bg-gradient-to-b")){
                resetButtons();
                console.log("reset");
                sort("all");
            }else{
                resetButtons();
                $(this).parent().addClass("bg-gradient-to-b from-green-200 to-green-100");
                sort(4);
            }
        });

        $("#lasidologo").click(function() {
            if ($(this).parent().hasClass("bg-gradient-to-b")){
                resetButtons();
                console.log("reset");
                sort("all");
            }else{
                resetButtons();
                $(this).parent().addClass("bg-gradient-to-b from-green-200 to-green-100");
                sort(5);
            }
        });

        $("#jeudemologo").click(function() {
            if ($(this).parent().hasClass("bg-gradient-to-b")){
                resetButtons();
                console.log("reset");
                sort("all");
            }else{
                resetButtons();
                $(this).parent().addClass("bg-gradient-to-b from-green-200 to-green-100");
                sort(6);
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
    }

    function resetButtons(){
        $("#mikadologo").parent().removeClass("bg-gradient-to-b from-green-200 to-green-100")
        $("#diabolologo").parent().removeClass("bg-gradient-to-b from-green-200 to-green-100")
        $("#cogitologo").parent().removeClass("bg-gradient-to-b from-green-200 to-green-100")
        $("#mentalologo").parent().removeClass("bg-gradient-to-b from-green-200 to-green-100")
        $("#lasidologo").parent().removeClass("bg-gradient-to-b from-green-200 to-green-100")
        $("#jeudemologo").parent().removeClass("bg-gradient-to-b from-green-200 to-green-100")

    }
</script>
