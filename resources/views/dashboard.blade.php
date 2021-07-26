<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('WMT Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('message'))
            <div x-data="{ show: true }" x-show="show" class=" w-11/12 md:w-2/5 bg-white my-2 rounded-md px-6 border-l-4 border-green-500">
               <div class="flex items-center py-4">
                  <i class="fas fa-info-circle fill-current text-4xl text-gray-700"></i>
                  <div class="ml-5">
                     <div class="flex mt-1 mb-1 ml-2">
               <label>
                  <h1 class="text-sm font-bold">Success</h1> 
                  <p class="text-xs text-base-content text-opacity-60">
                     {{ session('message') }}
                  </p>
               </div>
                  </div>
                  <div class="ml-20">
                        <button type="button" @click="show = false"  class=" text-yellow-700 outline-none">
                           <span class="text-2xl">
                              <svg xmlns="http://www.w3.org/2000/svg" class=" mt-1 h-5 w-5 float-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                           </span>
                        </button>
                  </div>
               </div>
            </div>
            <br>
            @endif
            @if (session()->has('failed'))
            <div x-data="{ show: true }" x-show="show" class=" w-11/12 md:w-2/5 bg-white my-2 rounded-md px-6 border-l-4  border-red-500">
               <div class="flex items-center py-4">
                  <i class="fas fa-info-circle fill-current text-4xl text-gray-700"></i>
                  <div class="ml-5">
                        <div class="flex mt-1 mb-1 ml-2">
               <label>
                  <h1 class="text-sm font-bold">Failed</h1> 
                  <p class="text-xs text-base-content text-opacity-60">
                     {{ session('failed') }}
                  </p>
               </div>
                  </div>
                  <div class="ml-20">
                        <button type="button" @click="show = false"  class=" text-yellow-700 outline-none">
                           <span class="text-2xl">
                              <svg xmlns="http://www.w3.org/2000/svg" class=" mt-1 h-5 w-5 float-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                           </span>
                        </button>
                  </div>
               </div>
            </div>
            <br>
            @endif 
            @livewire('enquiries')
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('incidents')
        </div>
    </div>

</x-app-layout>
