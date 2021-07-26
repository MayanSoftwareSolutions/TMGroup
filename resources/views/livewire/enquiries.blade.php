<div>
    <div class="max-w-7xl mx-auto rounded-lg py-5 sm:px-3 lg:px-4">  
      <div id="enquiry_data" class="flex flex-col">
         <div class="flex flex-wrap -mx-1 p-2 overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-1 xl:-mx-1">
                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1">
                    <div class="shadow-sm rounded-2xl w-full p-4 bg-white flex justify-between items-center">
                        <div class="w-3/6">
                            <p class="text-gray-700 text-sm">
                                <span class="text-green-600 font-bold">
                                    You've had
                                    @if($newEquiries > 0)
                                    {{ $newEquiries }}
                                    @else
                                    No
                                    @endif
                                </span>
                                new enquiries recieved this week  
                            </p>
                        </div>
                        <div class="w-1/6 text-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700 @if($newEquiries > 0) animate-bounce @endif" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1">
                    <div class="shadow-sm rounded-2xl w-full p-4 bg-white flex justify-between items-center">
                        <div class="w-3/6">
                            <p class="text-gray-700 text-sm">
                                <span class="text-blue-600 font-bold">
                                    You have
                                    @if($acknoldgements > 0)
                                    {{ $acknoldgements }}
                                    @else
                                    No
                                    @endif
                                </span>
                                enquiries needing acknoldgement
                            </p>
                        </div>
                        <div class="w-1/6 text-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700 @if($acknoldgements > 0) animate-bounce @endif" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1">           
                    <div class="shadow-sm rounded-2xl w-full p-4 bg-white flex justify-between items-center">
                        <div class="w-3/6">
                            <p class="text-gray-700 text-sm"> 
                                <span class="text-red-500 font-bold">
                                     You have
                                    @if($openEnquiries > 0)
                                    {{ $openEnquiries }}
                                    @else
                                    No
                                    @endif 
                                </span>
                                enquiries which are still open
                            </p>
                        </div>
                        <div class="w-1/6 text-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 @if($acknoldgements > 0) animate-bounce @endif" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1">
                    <div class="shadow-sm rounded-2xl w-full p-4 bg-white flex justify-between items-center">
                        <div class="w-3/6">
                            <p class="text-gray-700 text-sm">
                                <span class="text-purple-600 font-bold">
                                    You have
                                    {{ $appointments }}
                                </span>
                                    upcoming appointments
                            </p>
                        </div>
                        <div class="w-1/6 text-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 @if($appointments > 0) animate-bounce @endif" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-1 md:px-1 md:w-1/2 lg:my-1 lg:px-1 lg:w-1/4 xl:my-1 xl:px-1">
                    <div class="shadow-sm rounded-2xl w-full p-4 bg-white flex justify-between items-center">
                        <div class="w-3/6">
                            <p class="text-gray-700 text-sm">
                                <span class="text-purple-600 font-bold">
                                    You have
                                    {{ $appointments }}
                                </span>
                                    unactioned high tickets raised
                            </p>
                        </div>
                        <div class="w-1/6 text-right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                           </svg>
                        </div>
                    </div>
                </div>

            </div>
      </div>
      <br>
   </div>
    
          
      <div id="contact_data" class="flex flex-col">
         <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
               <div class="shadow overflow-hidden bg-white border-b border-gray-200 sm:rounded-lg">
                  <div class="flex flex-col">
                     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                           <div class="shadow overflow-hidden border-b border-gray-200">
                              <h2 class="mb-2 mt-4 ml-6 font-extrabold float-left tracking-tight text-gray-700">
                                 Online Enquiries
                              </h2>
                           </div>
                           @if(count($allEnquiries) > 0)
                           <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                 <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Recieved On
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Company
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Acknowledged
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Progressed
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Appointment Set
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Status
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                       <span class="sr-only">Options</span>
                                    </th>
                                 </tr>
                              </thead>
                              @foreach($allEnquiries as $enquiry)
                              <tbody class="bg-white divide-y divide-gray-200">
                                 <tr>
                                     <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        {{ $enquiry->created_at->format('j F, Y') }}
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="flex items-center">
                                          <div class="ml-1">
                                             <div class="text-sm font-semibold font-medium text-gray-900">
                                                {{ $enquiry->organisation }}
                                             </div>
                                             <div class="text-xs text-gray-500">
                                                {{ $enquiry->name }}
                                             </div>
                                             <div class="text-xs text-gray-500">
                                                {{ $enquiry->email }}
                                                {{ $enquiry->tel }}
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 @if($enquiry->acknowledged == "No")bg-red-500 @else bg-green-500 @endif rounded">
                                        {{ $enquiry->acknowledged }}
                                        </span>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 @if($enquiry->progressed == "No")bg-red-500 @else bg-green-500 @endif rounded">
                                        {{ $enquiry->progressed }}
                                        </span>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="flex items-center">
                                          <div class="ml-1">
                                             <div class="text-sm font-semibold font-medium text-gray-900">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 @if($enquiry->appointment_set == "No")bg-red-500 @else bg-green-500 @endif rounded">
                                                {{ $enquiry->appointment_set }}
                                                </span>
                                             </div>
                                             <div class="text-xs text-gray-500">
                                                 @if($enquiry->appointment_date = Null)
                                                 No appointment set 
                                                 @else
                                                {{ $enquiry->appointment_date }}
                                                @endif
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 @if($enquiry->status == "Open")bg-green-500 @else bg-yellow-500 @endif rounded">  
                                        {{ $enquiry->status }}
                                        </span>
                                       </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                       @can('user_access')
                                       <a href="{{ route('contact.show', $enquiry->id) }}" class="inline-flex bg-white hover:bg-blue-600 text-gray-800 hover:text-white text-xs font-bold py-1 px-2 border border-gray-400 rounded shadow">Show</a>
                                       @endcan
                                       @can('user_edit')
                                       <a href="{{ route('interaction.create', $enquiry->id) }}" class="inline-flex bg-white hover:bg-red-500 text-gray-800 hover:text-white text-xs font-bold py-1 px-2 border border-gray-400 rounded shadow">Interact</a>
                                       @endcan
                                       @can('user_delete')
                                       <form class="inline-block form-prevent-multiple-submits" id="form" action="{{ route('contact.delete', $enquiry->id) }}" method="POST">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button type="submit" class="bg-white hover:bg-red-600 text-gray-800 hover:text-white text-xs font-bold py-1 px-2 border border-gray-400 rounded shadow button-prevent-multiple-submits">Delete</button>
                                       </form>
                                       @endcan
                                    </td>
                                 </tr>
                              </tbody>
                              @endforeach
                           </table>
                           @else
                           <div class="text-start w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                              <h2 class="text-sm font-extrabold text-black dark:text-white sm:text-sm">
                                    <span class="block">
                                       You dont have any enquiries at the moment 
                                    </span>
                                    <br>
                                    <span class="block text-red-500">
                                       Please check back later...
                                    </span>
                              </h2>
                           </div>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
   </div>
</div>
