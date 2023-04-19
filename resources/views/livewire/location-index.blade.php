<section class="text-gray-600 body-font relative" style="height: 100vh;">
    <div class="sm:flex sm:items-center sm:justify-center">
        <h1 class="px-4 mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">Location Activity</h1>
    </div>
    <div class="sm:flex sm:items-center mx-24 sm:justify-between">
      <div>
          <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 mt-5 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>

              <span>Send Activity Location</span>
          </button>
      </div>

      <div class="flex items-center mt-4 gap-x-3">
          <div class="relative flex items-center mt-4 md:mt-0">
              <span class="absolute">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
              </span>
  
              <input type="text" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
          </div>
      </div>
  </div>
    <div class="container px-5 py-5 mx-auto flex flex-nowrap">
      <div style="min-height: 60vh;" class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
        <div class="bg-gray-500 relative flex flex-wrap py-6 rounded shadow-md w-4/5">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-white text-base tracking-widest">ADDRESS</h2>
            <p class="mt-1 text-white text-base tracking-widest">Camp Reigo De Dios Trece Martires</p>
          </div>
        </div>
      </div>
      <div style="min-height: 60vh;" class="h-full overflow-x-auto lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
          <thead class="bg-gray-50 dark:bg-gray-800">
              <tr>
                  <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                      <div class="flex items-center gap-x-3">
                          <span>Location Name</span>
                      </div>
                  </th>

                  <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                      Date 
                  </th>

                  <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                      Type
                  </th>
              </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
              <tr>
                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                      <div class="flex items-center gap-x-2">
                          <h2 class="font-normal text-gray-800 dark:text-white ">CvSU Imus Campus</h2>
                      </div>
                  </td>
                  <td class="px-12 py-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                      03/25/23
                  </td>
                  <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Competition</td>
              </tr>
              <tr>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-normal text-gray-800 dark:text-white ">Camp Reigo De Dios Trece Martires</h2>
                    </div>
                </td>
                <td class="px-12 py-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                    03/18/23
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Traning</td>
            </tr>
              <tr>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-normal text-gray-800 dark:text-white ">CvSU Campus</h2>
                    </div>
                </td>
                <td class="px-12 py-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                    03/11/23
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Practice</td>
            </tr>
              <tr>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-normal text-gray-800 dark:text-white ">Camp Reigo De Dios Trece Martires</h2>
                    </div>
                </td>
                <td class="px-12 py-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                    03/04/23
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Traning</td>
            </tr>
              <tr>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="flex items-center gap-x-2">
                        <h2 class="font-normal text-gray-800 dark:text-white ">Camp Reigo De Dios Trece Martires</h2>
                    </div>
                </td>
                <td class="px-12 py-4 text-sm font-normal text-gray-700 whitespace-nowrap">
                    02/25/23
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Traning</td>
            </tr>
          </tbody>
      </table>
      </div>
    </div>
  </section>
  
        <x-dialog-modal wire:model="showingPostModal">
          <x-slot name="title">
            <div class="flex justify-center text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 outline-none">
              <p class="text-gray-300 dark:text-gray-300 mr-2">Set Activity Location</p>  
          </div>
          </x-slot>
      <x-slot name="content">
        <div class="flex flex-col gap-3 flex-grow bg-white rounded-lg w-full dark:bg-gray-600 dark:text-gray-300 dark:border-gray-600 p-3">              
          <div class="text-base px-3 pt-1 h-10 w-full border-none outline-none flex items-center">
            <label class="text-gray-300 dark:text-gray-300 mr-2">Location Name</label>   
            <input autocomplete="off" id="email" name="email" type="text" class="pr-3 peer placeholder-transparent h-10 w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Student ID No" />
          </div>
          <div class="text-base px-3 pt-1 h-10 w-full border-none outline-none flex items-center">
            <label class=" text-gray-300 dark:text-gray-300 mr-2">Date of Activity</label>   
            <input autocomplete="off" id="email" name="email" type="text" class="pr-3 peer placeholder-transparent h-10 w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Student ID No" />
          </div>
          <div class="text-base px-3 pt-1 w-full border-none outline-none flex items-start">
              <label class="text-gray-300 dark:text-gray-300 mr-2">Message</label> 
              <textarea cols="30" rows="8" class="w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Write Message Here"></textarea>
          </div>
      </div>
      </x-slot>
      <x-slot name="footer">
              <x-button wire:click="storePost">Set Location</x-button>
      </x-slot>
  </x-dialog-modal>