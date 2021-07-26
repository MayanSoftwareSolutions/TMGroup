<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enquiries') }}
        </h2>
    </x-slot>

    <div id="loading-screen" class="prevent-double hidden w-full h-full fixed block top-0 left-0 bg-white opacity-75 z-50">
        <span class="text-green-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0">
           <svg class="animate-spin -ml-1 mr-3 h-10 w-10 text-purple-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-50" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </span>
    </div>
    
    <div class="max-w-7xl mt-8 mx-auto rounded-lg py-5 sm:px-3 lg:px-4">
        <div class="block mb-8">
            <a href="{{ route('dashboard') }}" class="inset-y-0 right-0 bg-blue-600 hover:bg-purple-600 text-white font-bold text-xs py-2 px-4 rounded">Dashboard</a>
        </div>

         <div id="role_data" class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
               <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden bg-white border-b border-gray-200 sm:rounded-lg">
                     <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                           <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                              <div class="shadow overflow-hidden border-b border-gray-200">
                                  <div class="grid grid-cols-2 gap-1">
                                    <h2 class="mb-2 mt-4 ml-6 font-extrabold float-left tracking-tight text-gray-700">
                                        Online Enquiry
                                    </h2>
                                    <br>
                                    <div class="row-span-1 mt-1">
                                        <div class="flex items-center justify-center px-5 py-5">
                                            <div class="bg-white border w-full shadow-xl overflow-hidden sm:rounded-lg">
                                                <div class="border-gray-200">
                                                    <dl>
                                                        <div class="bg-white border-b px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-semibold text-gray-500">
                                                                Company
                                                            </dt>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                {{ $form->organisation }}
                                                            </dd>
                                                        </div>
                                                        <div class="bg-white border-b px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-semibold text-gray-500">
                                                                Recieved
                                                            </dt>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                {{ $form->created_at->diffForHumans() }}
                                                            </dd>
                                                        </div>
                                                        <div class="bg-white border-b px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-semibold text-gray-500">
                                                                From
                                                            </dt>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                {{ $form->name }}
                                                            </dd>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                {{ $form->email }}
                                                            </dd>
                                                        </div>
                                                        <div class="bg-white border-b px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-semibold text-gray-500">
                                                                Acknowledged 
                                                            </dt>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 @if($form->acknowledged == "No")bg-red-500 @else bg-green-500 @endif rounded">
                                                                    {{ $form->acknowledged }}
                                                                </span>
                                                            </dd>
                                                        </div>
                                                        <div class="bg-white border-b px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-semibold text-gray-500">
                                                                Progressed 
                                                            </dt>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 @if($form->progressed == "No")bg-red-500 @else bg-green-500 @endif rounded">
                                                                    {{ $form->progressed }}
                                                                </span>
                                                            </dd>
                                                        </div>
                                                        <div class="bg-white border-b px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-semibold text-gray-500">
                                                                Enquiry 
                                                            </dt>
                                                            <dd class="mt-1 text-sm font-semibold text-gray-700 sm:mt-0 sm:col-span-2">
                                                                    {{ $form->query }}
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row-span-1">
                                        <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                                            <div class="py-2">
                                                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                                        <table class="min-w-full leading-normal">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                        Interaction Type
                                                                    </th>
                                                                    <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                        Date Created
                                                                    </th>
                                                                    <th scope="col" class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                        status
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                         <p class="text-gray-900 whitespace-no-wrap">
                                                                            Jean marc
                                                                        </p> 
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                                            Admin
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                                            </span>
                                                                            <span class="relative">
                                                                                active
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                         <p class="text-gray-900 whitespace-no-wrap">
                                                                            Jean marc
                                                                        </p> 
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                                            Admin
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                                            </span>
                                                                            <span class="relative">
                                                                                active
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                         <p class="text-gray-900 whitespace-no-wrap">
                                                                            Jean marc
                                                                        </p> 
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                                            Admin
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                                            </span>
                                                                            <span class="relative">
                                                                                active
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                         <p class="text-gray-900 whitespace-no-wrap">
                                                                            Jean marc
                                                                        </p> 
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                                            Admin
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                                            </span>
                                                                            <span class="relative">
                                                                                active
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                                                            <div class="flex items-center">
                                                                <button type="button" class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                                                    <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                                                    1
                                                                </button>
                                                                <button type="button" class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                                                    2
                                                                </button>
                                                                <button type="button" class="w-full px-4 py-2 border-t border-b text-base text-gray-600 bg-white hover:bg-gray-100">
                                                                    3
                                                                </button>
                                                                <button type="button" class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                                                    4
                                                                </button>
                                                                <button type="button" class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                                                    <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
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
                  </div>
               </div>
            </div>
         </div>


    </div>

    </x-app-layout>