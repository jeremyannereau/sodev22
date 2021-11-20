
<x-app-layout>
    <x-slot name="header">
        {{-- <img class="flex-shrink-0 w-10 h-10" src="{{ URL::asset( $projet->logoChemin )}}"> --}}
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               {{ $projet->projectName }}

        </h2>
    </x-slot>

<div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    <tr>

                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Client</th>
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
                    </tr>
                </thead>

                <tbody class="bg-white" >
                    @if ($actions->count() == 0)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Aucune actions sur ce projet</td>
                            <td></td>
                        </tr>
                    @else

                    @foreach ($actions as $action)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img src="{{ URL::asset( $projet->logoChemin )}}">

                                </div>

                                <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        {{ $projet->projectName }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-500">{{ $action->content }}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </td>


                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>

                        </td>
                        <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <form method="POST" action="{{ route('deleteAction', [$action]) }}">
                                @csrf
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
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


</x-app-layout>
