
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un site') }}
        </h1>
    </x-slot>

    <div class="py-4 px-10 max-w-full max-h-screen">
        <div class="p-2 bg-white shadow-lg rounded-md border-gray-200">
            <div class = "p-2 bg-gray-100">
                <form action="{{ route('saveProjet') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- projectName -->
                    <div class="flex" >
                        <div class="pb-4 w-2/4 px-2">
                            <x-label for="projectName" :value="__('Nom du site')" />

                            <x-input id="projectName" style="text-transform: uppercase"  class="block mt-1 w-full" type="text" name="projectName" :value="old('projectName')" required autofocus />
                        </div>
                        <div class="pb-4 w-1/4 px-2">
                            <x-label  for="baseSerial" :value="__('BASE')" />

                            <x-input id="baseSerial" style="text-transform: uppercase"   class="block mt-1 w-full" type="text" name="baseSerial" :value="old('BASE')" required autofocus />
                        </div>
                        <div class="pb-4 w-1/4 px-2">
                            <x-label  for="serveur" :value="__('SERVEUR')" />
                            <select id="serveur" class="block mt-1 w-full" type="text" name="serveur"  required autofocus >
                                <option>srv1</option>
                                <option>srv2</option>
                                <option>srv3</option>
                                <option>srv4</option>
                                <option>srv5</option>
                                <option>srv6</option>
                                <option>srv7</option>
                                <option>srv8</option>
                                <option>srv9</option>
                                <option>srv10</option>
                                <option>srv11</option>
                                <option>srv12</option>
                            </select>

                        </div>
                    </div>

                    <!-- Logo -->
                    <div class="flex">
                        <div class="pb-4 w-2/4 px-2">
                            <x-label for="logo" :value="__('Logo')" />

                            <div class=" mt-1 w-full  p-2">
                                <label class="h-full  flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-1 text-xs leading-normal text-center" id="fileName">Choisissez un fichier</span>
                                    <input type='file' class="hidden" name="logo" id="logo" onchange="preview()"/>
                                </label>
                            </div>


                            <div id="teasing" class="mt-1 w-2/4  p-2" hidden>

                                <x-label for="apercu" :value="__('Aperçu')" />
                                <img  id="frame" src=""  class="border-opacity-0 mt-1 w-full h-full p-2 bg-white rounded-lg shadow-lg "/>
                            </div>
                        </div>
                        <div class="pb-4 w-2/4 px-2">
                            <x-label for="modules" :value="__('Modules')" />
                            <div class="border-opacity-0 mt-1 mr-0 w-full p-2 bg-white rounded-lg shadow-lg ">
                                <button style="width:15%;"><img id="mikadologo" src="{{ URL::asset('/img/mika.png')}}" alt="" class="opacity-25"> Mikado</button>
                                <button style="width:15%;"><img src="{{ URL::asset('/img/diabolo.png')}}" alt="" class="opacity-25">Diabolo</button>
                                <button style="width:15%;"><img src="{{ URL::asset('/img/cogito.png')}}" alt=""class="opacity-25">Cogito</button>
                                <button style="width:15%;"><img src="{{ URL::asset('/img/mentalo.png')}}" alt="" class="opacity-25">Mentalo</button>
                                <button style="width:15%;"><img src="{{ URL::asset('/img/lasido.png')}}" alt="" class="opacity-25">Lasido</button>
                                <button style="width:15%;"><img src="{{ URL::asset('/img/jeudemo.png')}}" alt="" class="opacity-25">Jeudemo</button>
                            </div>
                            <x-label for="options" :value="__('Options')" />
                            <div class=" border-opacity-0 mt-1 w-full p-2 bg-white rounded-lg shadow-lg ">

                                <button style="width:11%;"><img src="{{ URL::asset('/img/portail.png')}}" alt="" class="opacity-25 ">Portail Familles</button>
                                <button style="width:11%;"><img src="{{ URL::asset('/img/ged.png')}}" alt="" class="opacity-25"> GED</button>
                                <button style="width:11%;"><img src="{{ URL::asset('/img/borne.jpg')}}" alt="" class="opacity-25">Modulo Borne</button>
                                <button style="width:11%;"><img src="{{ URL::asset('/img/tab.png')}}" alt="" class="opacity-25 ">Modulo Tab</button>
                                <button style="width:11%;"><img src="{{ URL::asset('/img/api.png')}}" alt="" class="opacity-25 ">API Particulier</button>
                                <button style="width:11%;"><img src="{{ URL::asset('/img/sms.png')}}" alt="" class="opacity-25 ">SMS</button>
                                <button style="width:11%;"><img src="{{ URL::asset('/img/payfip.png')}}" alt="" class="opacity-25">PAYFIP</button>
                            </div>
                        </div>


                    </div>

                    <div class="flex mt-4">
                        <button class="bg-indigo-800 w-full text-white font-bold py-2 px-4 rounded">
                            Créer le site
                        </button>
                    </div>
                </form>


                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="text-red-500">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>


</x-app-layout>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){

        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#fileName').text(fileName)
            $('#teasing').removeAttr('hidden');
        });

        $("img").click(function() {
            event.preventDefault();
            if ($(this).hasClass("opacity-25")) {
                $(this).removeClass("opacity-25");
            }else {
                $(this).addClass("opacity-25");
            };

        });
    });

    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>


