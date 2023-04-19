<section class="container px-4 mx-auto">
    <div class="sm:flex sm:items-center sm:justify-center">
        <h1 class="px-4 mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">Group Attendance</h1>
    </div>
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center my-2 mt-5">
            <h2 class="text-lg font-medium text-gray-800 dark:text-white mx-3">Aplha 1st</h2>
            <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">37 Students</span>
        </div>
        <div class="flex items-center mt-4 gap-x-3">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
    
            <input type="text" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
        </div>
    </div>
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="text-center py-3.5 px-4 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">Name</th>
                                <th scope="col" class="px-4 text-center py-3.5 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">Date</th>
                                <th scope="col" class="px-12 text-center py-3.5 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">Status</th>
                                <th scope="col" class="px-4 text-center py-3.5 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">Time In</th>
                                <th scope="col" class="px-4 text-center py-3.5 text-sm font-normal rtl:text-right text-gray-500 dark:text-gray-400">Time out</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        

                                        <div class="flex items-center gap-x-2">
                                            <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Juan Dela Cruz</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">@delacruz</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">April 1, 2023</td>
                                <td class="flex justify-center px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h2 class="text-sm font-normal">Absent</h2>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">--:--</td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">--:--</td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        

                                        <div class="flex items-center gap-x-2">
                                            <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                                            
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Eduardo Tacorda</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">@eduardotacorda</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">April 1, 2023</td>
                                <td class="flex justify-center px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-6 py-1 text-orange-500 rounded-full gap-x-2 bg-gray-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h2 class="text-sm font-normal">Late</h2>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">13:05</td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">17:12</td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        

                                        <div class="flex items-center gap-x-2">
                                            <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Norvine G. Hermeno</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">@norvinehermeno</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">April 1, 2023</td>
                                <td class="flex justify-center px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h2 class="text-sm font-normal">Present</h2>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">12:50</td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">17:10</td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        

                                        <div class="flex items-center gap-x-2">
                                            <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Sheila R. Permacio</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">@sheilapermacio</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">April 1, 2023</td>
                                <td class="flex justify-center px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h2 class="text-sm font-normal">Present</h2>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">12:42</td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">17:05</td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        

                                        <div class="flex items-center gap-x-2">
                                            <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">John Lawrence A. Jaril</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">@johnlawrence</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">April 1, 2023</td>
                                <td class="flex justify-center px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h2 class="text-sm font-normal">Present</h2>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">12:39</td>
                                <td class="text-center px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">17:09</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
        <div class="text-sm text-gray-500 dark:text-gray-400">
            Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 8</span> 
        </div>

        <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</section>