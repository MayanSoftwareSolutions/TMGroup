<div>     
      <div id="contact_data" class="flex flex-col">
         <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
               <div class="shadow overflow-hidden bg-white border-b border-gray-200 sm:rounded-lg">
                  <div class="flex flex-col">
                     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                           <div class="shadow overflow-hidden border-b border-gray-200">
                              <h2 class="mb-2 mt-4 ml-6 font-extrabold float-left tracking-tight text-gray-700">
                                 Incidents
                              </h2>
                           </div>
                           
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
                              
                              <tbody class="bg-white divide-y divide-gray-200">
                                 <tr>
                                     <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="flex items-center">
                                          <div class="ml-1">
                                             <div class="text-sm font-semibold font-medium text-gray-900">
                                                
                                             </div>
                                             <div class="text-xs text-gray-500">
                                                
                                             </div>
                                             <div class="text-xs text-gray-500">
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100  rounded">
                                        
                                        </span>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100  rounded">
                                        
                                        </span>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="flex items-center">
                                          <div class="ml-1">
                                             <div class="text-sm font-semibold font-medium text-gray-900">
                                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100  rounded">
                                                
                                                </span>
                                             </div>
                                             <div class="text-xs text-gray-500">
                                                 
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       <div class="text-sm font-semibold text-gray-900">
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100  rounded">  
                                        
                                        </span>
                                       </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                       @can('user_access')
                                       <a href="#" class="inline-flex bg-white hover:bg-blue-600 text-gray-800 hover:text-white text-xs font-bold py-1 px-2 border border-gray-400 rounded shadow">Show</a>
                                       @endcan
                                       @can('user_edit')
                                       <a href="#" class="inline-flex bg-white hover:bg-red-500 text-gray-800 hover:text-white text-xs font-bold py-1 px-2 border border-gray-400 rounded shadow">Modify</a>
                                       @endcan
                                       @can('user_delete')
                                       <form class="inline-block form-prevent-multiple-submits" id="form" action="#" method="POST">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button type="submit" class="bg-white hover:bg-red-600 text-gray-800 hover:text-white text-xs font-bold py-1 px-2 border border-gray-400 rounded shadow button-prevent-multiple-submits">Delete</button>
                                       </form>
                                       @endcan
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           {{-- @else
                           <div class="text-start w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                              <h2 class="text-sm font-extrabold text-black dark:text-white sm:text-sm">
                                    <span class="block">
                                       You dont have any incident at the moment 
                                    </span>
                                    <br>
                                    <span class="block text-red-500">
                                       Please check back later...
                                    </span>
                              </h2>
                           </div>
                           @endif --}}

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

