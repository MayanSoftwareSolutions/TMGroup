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
                        <h2 class="mt-4 ml-6 font-extrabold float-left tracking-tight text-gray-700">
                            Online Enquiries
                        </h2>
                            <br>
                            <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-2 lg:-mx-2 xl:-mx-1">
                                    <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                                        <div class="px-5 py-5">
                                            <h2 class="mb-2 ml-2 font-semibold float-left tracking-tight text-gray-700">
                                                    Enquiry From
                                            </h2>
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

                                    <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/2 xl:my-1 xl:px-1 xl:w-1/2">
                                        @livewire('interactions-table', ['contactForm' => $form->id])
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