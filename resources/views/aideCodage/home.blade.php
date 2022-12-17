@include('console.beginTemplate')

<div>
    <div class="grid grid-cols-1" style="height:3%; background-color:white">
       <p> AIDE AU CODAGE</p>
    </div>
    <div class="grid grid-cols-2" style="width:100%">

        <div class="rounded-lg">
            <div id="editeurCode"></div>
        </div>
        <div class="rounded-lg">
            <div id="librairieCode"></div>
        </div>

    </div>
    <div class="row">
        <div  class="col-2">

            <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
            </div>
            <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
            </div>
            <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
            </div>
            <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                </div>
                <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
            </div>

        </div>



    </div>

</div>

 <!-- L'élément HTML d'identifiant "app" -->

 @include('console.endTemplate')



 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- On importe le fichier  /public/js/app.js  -->
 <script type="text/javascript   " src="{{ asset('js/app.js') }}" ></script>


