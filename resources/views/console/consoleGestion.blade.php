<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body >
    <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
        <!--Start SideBar-->
        <aside class="w-20 relative z-20 flex-shrink-0  px-2 overflow-y-auto bg-indigo-600 sm:block">
            <div class="mb-6">
                <!--Start logo -->
                <div class="flex justify-center">
                  <div class="w-14 h-14 rounded-full bg-gray-300 border-2 border-white mt-2">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxhAxJ4D7MOeTTj6kR9PBeZonW5HM7giKjTbEmR-HMBwf3G1VqGnlwpO1kWrdyIZu8_U&usqp=CAU"
                     class="rounded-full w-auto"
                    />
                  </div>
                </div>
                <h1 class="text-xs font-semibold text-white text-center">{{ Auth::user()->name }}</h1>
                <!--End logo -->
                <!--Start NavItem -->
                <div>
                  <ul class="mt-6 leading-10 px-4">
                    <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-blue-400 cursor-pointer"
                        {{-- @click="openMenu !== 1 ? openMenu = 1 : openMenu = null" --}}
                      >
                      <i class="fas fa-align-left fa-sm text-white"></i>
                    </li>
                    <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-pink-400 cursor-pointer">
                      <i class="fas fa-question-circle fa-sm text-white"></i>
                    </li>
                    <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-yellow-400 cursor-pointer">
                      <i class="fas fa-headphones fa-sm text-white"></i>
                    </li>
                    <li class="absolute bottom-0 mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer">
                      <i href="{{ route('logout') }}" class="fas fa-power-off fa-sm text-indigo-600"></i>
                    </li>
                  </ul>
                </div>
                <!--End NavItem -->
            </div>
        </aside>
        <!-- Start Open Menu -->
        <aside class="animate__animated animate__fadeInLeft w-52 relative z-0 flex-shrink-0 hidden px-4 overflow-y-auto bg-gray-100 sm:block "
               x-show="openMenu ==  0"
               @click.away="openMenu = null"
               style="display: none;">
            <div class="mb-6">
              <!--Start Sidebar for open menu -->
              <div class="grid grid-cols-1 gap-4 grid-cols-2 mt-6">
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-calculator fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Calculator</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Wallet</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-archive fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Saving</p>
                </div>
                <!-- End Navitem -->
                <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-money-bill-wave-alt fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Currencies</p>
                </div>
                <!-- End Navitem -->
                 <!-- Start Navitem -->
                <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                  <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                    <i class="fas fa-shopping-basket fa-sm text-indigo-600"></i>
                  </div>
                  <p class="text-xs mt-1 text-center font-semibold">Expenses</p>
                </div>
                <!-- End Navitem -->
              </div>
              <!--End Sidebar for open menu -->
            </div>
        </aside>
        <!-- End Open Menu -->

        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <!--Start Topbar -->
            <!--End Topbar -->
          <main class="relative z-0 flex-1 pb-8 px-6 bg-white">
              <div class="grid pb-10  mt-4 ">
                  <!-- Start Content-->
                    <div class="mb-2">
                      <p class="text-lg font-semibold text-gray-400">Applications</p>
                    </div>

                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">
                      <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                          <div class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out"></div>
                          <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                            <div>
                              <h3 class="text-center text-white text-lg">
                                   Suivi de deploiement Abelium
                              </h3>
                              <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                {{ $projets->count() }} projets déployés
                              </h3>
                              <div class="flex space-x-4 mt-4">
                                 <button onclick="location.href='{{ url('dashboard') }}'" class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                  focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                  Ouvrir l'application
                                </button>

                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                      style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                        <div class="absolute inset-0 bg-green-800 bg-opacity-75 transition duration-300 ease-in-out"></div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                          <div>
                            <h3 class="text-center text-white text-lg">
                                Aide au codage
                            </h3>
                            <h3 class="text-center text-white text-3xl mt-2 font-bold">
                              Bientot disponible
                            </h3>
                            <div class="flex space-x-4 mt-4">
                               <button  class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                focus:outline-none text-white text-xs py-3 px-4 rounded font-bold" disabled>
                                Ouvrir l'application
                              </button>

                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                    style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                      <div class="absolute inset-0 bg-red-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                      <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                        <div>
                          <h3 class="text-center text-white text-lg">
                            Agenda de déploiement
                          </h3>
                          <h3 class="text-center text-white text-3xl mt-2 font-bold">
                            Bientot disponible
                          </h3>
                          <div class="flex space-x-4 mt-4">
                             <button class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                              focus:outline-none text-white text-xs py-3 px-4 rounded font-bold" disabled>
                              Ouvrir l'application
                            </button>

                          </div>
                        </div>
                      </div>
                  </div>
                    </div>
                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">
                        <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                          style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                            <div class="absolute inset-0 bg-yellow-200 bg-opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                              <div>
                                <h3 class="text-center text-white text-lg">
                                    Mon stockage cloud
                                </h3>
                                <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                    Bientot disponible
                                </h3>
                                <div class="flex space-x-4 mt-4">
                                   <button onclick="location.href='{{ url('onedrive') }}'" class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                    focus:outline-none text-white text-xs py-3 px-4 rounded font-bold" disabled>
                                    Transfer
                                  </button>

                                </div>
                              </div>
                            </div>
                        </div>

                         <div class="opacity-25 relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                         style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                          <div class="absolute inset-0 bg-yellow-100 bg-opacity-75 transition duration-300 ease-in-out"></div>
                           <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                             <div>
                               <h3 class="text-center text-white text-lg">
                                Optimisation et idée de déploiement
                               </h3>
                               <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                Bientot disponible
                               </h3>
                               <div class="flex space-x-4 mt-4">
                                  <button class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                   focus:outline-none text-white text-xs py-3 px-4 rounded font-bold" disabled>
                                   Transfer
                                 </button>

                               </div>
                             </div>
                           </div>
                       </div>
                       <div class="opacity-25 relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                       style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                         <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                         <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                           <div>
                             <h3 class="text-center text-white text-lg">
                                Application en développement
                             </h3>
                             <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                Bientot disponible
                             </h3>
                             <div class="flex space-x-4 mt-4">
                                <button class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline
                                 focus:outline-none text-white text-xs py-3 px-4 rounded font-bold " disabled>
                                 Transfer
                               </button>

                             </div>
                           </div>
                         </div>
                     </div>
                      </div>
                  <!-- End Content-->
              </div>
          </main>
        </div>
    </div>
</body>
</body>
</html>
