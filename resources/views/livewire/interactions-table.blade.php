@can('interaction_access')
<div>
   <div class="container mx-auto px-4 sm:px-8 w-full">
      <div class="py-2">
          <h2 class="mt-4 ml-5 font-semibold text-gray-700">
                Interactions
         </h2>
         <div class="-mx-3 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block w-full overflow-hidden">
                @if(count($interactions) > 0)
                      @foreach($interactions as $interaction)
                        <div class="container flex flex-col mx-auto w-full p-2">
                            <div x-data={show:false} class="rounded-sm">
                                <div class="border border-b-0 rounded-lg shadow-lg bg-white px-10 py-3" id="headingOne">
                                    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                                        <div class="font-semibold text-gray-800 text-xs dark:text-white">
                                            @if($interaction->interaction_type == "Acknowledgement")An @else A @endif {{ $interaction->interaction_type }} message was sent
                                        </div>
                                        <div class="text-gray-600 text-xs dark:text-gray-200 text-sm">
                                            Created {{ $interaction->created_at->diffForHumans() }}
                                        </div>
                                        <button @click="show=!show" class="float-right inline-flex bg-white hover:bg-black text-gray-800 hover:text-white text-xs font-semibold py-1 px-2 border border-gray-400 rounded shadow" type="button">
                                        Detail
                                        </button>
                                        <br>
                                    </div>
                                </div>
                                <div x-show="show" class="border border-b-0 mt-2 p-2 rounded-lg shadow-lg  px-10 py-6">
                                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                                        <p class="text-indigo-500 text-sm font-medium">
                                            Sent to: {{ $interaction->recipient }}
                                        </p>
                                        <p class="text-gray-700 text-xs dark:text-white text-xl font-medium mb-2">
                                            Subject: {{ $interaction->subject }}
                                        </p>
                                        <p class="text-gray-700 text-xs dark:text-white text-xl font-medium mb-2">
                                            {{ $interaction->context }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                     @else
                     <div class="container flex flex-col mx-auto w-full p-2">
                            <div x-data={show:false} class="rounded-sm">
                                <div class="border border-b-0 rounded-lg shadow-lg bg-red-100 px-10 py-3" id="headingOne">
                                    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                                        <div class="mt-6 font-semibold text-gray-700 text-sm dark:text-white">
                                            There have not been any interactions created for this enquiry form 
                                        </div>

                                        <a class="float-right inline-flex bg-white hover:bg-green-600 text-gray-800 hover:text-white text-xs font-semibold py-1 px-2 border border-gray-400 rounded shadow" type="button" href="{{ route('interaction.create', $contactForm) }}">
                                        Detail
                                        </a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                     <br>
               <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                  <div class="flex items-center text-xs">
                     {{ $interactions->links() }}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endcan