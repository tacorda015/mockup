<section class="container  mx-auto mt-5">
    <div class="sm:flex sm:items-center sm:justify-center">
            <h1 class=" mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">Module</h1>
    </div>

    <div class="mx-3 mt-6 flex items-center justify-around gap-5">
        <div>
            <button wire:click="composeMessage" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Upload Module</span>
            </button>
        </div>
        <div class="flex flex-grow"></div>

        <div class="relative flex items-center mt-4 md:mt-0">
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
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 rounded-lg mx-3">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <span>File name</span>
                                    </div>
                                </th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-norma hidden lg:inline-flex text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Message
                                </th>

                                <th scope="col" class="pl-32 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 hidden md:inline-flex dark:text-gray-400">
                                    Date uploaded
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Title
                                </th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 ">
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">

                                        <div class="flex items-center gap-x-2">
                                            <div class="flex items-center justify-center w-8 h-8 text-blue-500 bg-blue-100 rounded-full dark:bg-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                </svg>
                                            </div>
                                            
                                            <div>
                                                <h2 class="font-normal text-gray-800 dark:text-white ">Tech requirements.pdf</h2>
                                                <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">200 KB</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-12 py-4 text-sm font-normal hidden lg:inline-flex text-gray-700 whitespace-nowrap">
                                    <div>
                                        <p class="text-base font-normal hidden md:flex text-gray-500 dark:text-gray-400">Everything will be okay</p>
                                        <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">Make your self ready...</p>
                                    </div>
                                </td>
                                <td class=" text-left px-4 py-4 text-sm text-gray-500 dark:text-gray-300 hidden md:inline-flex whitespace-nowrap">Jan 4, 2022</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Please Read</td>
                                <td class="justify-center flex items-center gap-x-3 px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Delete
                                    </button>
                                    <button wire:click="showingPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">

                                        <div class="flex items-center gap-x-2">
                                            <div class="flex items-center justify-center w-8 h-8 text-blue-500 bg-blue-100 rounded-full dark:bg-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                            </div>
                                            
                                            <div>
                                                <h2 class="font-normal text-gray-800 dark:text-white ">Dashboard screenshot.jpg</h2>
                                                <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">720 KB</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-12 py-4 text-sm font-normal hidden lg:inline-flex text-gray-700 whitespace-nowrap">
                                    <div>
                                        <p class="text-base font-normal hidden md:flex text-gray-500 dark:text-gray-400">Dont forget to pray</p>
                                        <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">Believe in our GOD...</p>
                                    </div>
                                </td>
                                <td class="px-4 pl-10 text-sm text-gray-500 dark:text-gray-300 hidden md:inline-flex whitespace-nowrap">Jan 4, 2022</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Review the Lesson</td>
                                <td class="justify-center flex items-center gap-x-3 px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Delete
                                    </button>
                                    <button wire:click="showingPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">

                                        <div class="flex items-center gap-x-2">
                                            <div class="flex items-center justify-center w-8 h-8 text-blue-500 bg-blue-100 rounded-full dark:bg-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                                </svg>
                                            </div>
                                            
                                            <div>
                                                <h2 class="font-normal text-gray-800 dark:text-white ">Dashboard prototype FINAL.gif</h2>
                                                <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">21 KB</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-12 py-4 text-sm font-normal hidden lg:inline-flex text-gray-700 whitespace-nowrap">
                                    <div>
                                        <p class="text-base font-normal hidden md:flex text-gray-500 dark:text-gray-400">Make it on time</p>
                                        <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">Train your self...</p>
                                    </div>
                                </td>
                                <td class="px-4 pl-16 text-sm text-gray-500 dark:text-gray-300 hidden md:inline-flex whitespace-nowrap">Jan 2, 2022</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Pass on time</td>
                                <td class="justify-center flex items-center gap-x-3 px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Delete
                                    </button>
                                    <button wire:click="showingPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">

                                        <div class="flex items-center gap-x-2">
                                            <div class="flex items-center justify-center w-8 h-8 text-blue-500 bg-blue-100 rounded-full dark:bg-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                            </div>
                                            
                                            <div>
                                                <h2 class="font-normal text-gray-800 dark:text-white ">App inspiration.png</h2>
                                                <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">2 MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-12 py-4 text-sm font-normal hidden lg:inline-flex text-gray-700 whitespace-nowrap">
                                    <div>
                                        <p class="text-base font-normal hidden md:flex text-gray-500 dark:text-gray-400">Motivate your self</p>
                                        <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">First believe to your self...</p>
                                    </div>
                                </td>
                                <td class="px-4 pl-10 text-sm text-gray-500 dark:text-gray-300 hidden md:inline-flex whitespace-nowrap">Jan 8, 2022</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Finish all project</td>
                                <td class="justify-center flex items-center gap-x-3 px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Delete
                                    </button>
                                    <button wire:click="showingPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Edit
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">

                                        <div class="flex items-center gap-x-2">
                                            <div class="flex items-center justify-center w-8 h-8 text-blue-500 bg-blue-100 rounded-full dark:bg-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                                                </svg>
                                            </div>
                                            
                                            <div>
                                                <h2 class="font-normal text-gray-800 dark:text-white ">The Absolute Basics.mp4</h2>
                                                <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">720 MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-12 py-4 text-sm font-normal hidden lg:inline-flex text-gray-700 whitespace-nowrap">
                                    <div>
                                        <p class="text-base font-normal hidden md:flex text-gray-500 dark:text-gray-400">Law of Attraction</p>
                                        <p class="text-xs font-normal hidden md:flex text-gray-500 dark:text-gray-400">Believe the process...</p>
                                    </div>
                                </td>
                                <td class="px-4 pl-14 text-sm text-gray-500 dark:text-gray-300 hidden md:inline-flex whitespace-nowrap">Jan 8, 2022</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Everything will be okay</td>
                                <td class="justify-center flex items-center gap-x-3 px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Delete
                                    </button>
                                    <button wire:click="showingPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
        <div class="text-sm text-gray-500 dark:text-gray-400">
            Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span> 
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

<x-dialog-modal wire:model="showingPostModal" class="border border-sky-500">
    <x-slot name="title">
        <h2 class="text-4xl font-medium text-gray-800 dark:text-white ">Update Module</h2>  
    </x-slot>
    <x-slot name="content">
        <div class="flex flex-col gap-3 flex-grow bg-white rounded-lg w-full dark:bg-gray-600 dark:text-gray-300 dark:border-gray-600 p-3">              
            <div class="text-base px-3 pt-1 h-10 w-full border-none outline-none flex items-center">
              <label class="text-gray-300 dark:text-gray-300 pr-8 mr-2">Title</label>   
              <input autocomplete="off" id="email" name="email" type="text" class="pr-3 peer placeholder-transparent h-10 w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Student ID No" />
            </div>
            <div class="text-base px-3 pt-1 w-full border-none outline-none flex items-start">
                <label class="text-gray-300 dark:text-gray-300 mr-2">Message</label> 
                <textarea cols="30" rows="8" class="w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Write Message Here"></textarea>
            </div>
        </div>
        <div class="relative flex">
            <input type="file" class="border h-8 mt-2 rounded-lg dark:bg-gray-900 dark:text-gray-300 outline-none" />                                                
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-button wire:click="updatePost" class="mx-2">Update</x-button>
    </x-slot>
</x-dialog-modal>


<x-dialog-modal wire:model="composeMessage" class="border border-sky-500" style="height: 800px;">
    <x-slot name="title">
        <div class="flex justify-center text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 outline-none">
            <p class="text-gray-300 dark:text-gray-300 mr-2">Send Module</p>  
        </div>
    </x-slot>
    <x-slot name="content">
            <div class="flex flex-col gap-3 flex-grow bg-white rounded-lg w-full dark:bg-gray-600 dark:text-gray-300 dark:border-gray-600 p-3">              
                <div class="text-base px-3 pt-1 h-10 w-full border-none outline-none flex items-center">
                  <label class="text-gray-300 dark:text-gray-300 pr-8 mr-2">Title</label>   
                  <input autocomplete="off" id="email" name="email" type="text" class="pr-3 peer placeholder-transparent h-10 w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Student ID No" />
                </div>
                <div class="text-base px-3 pt-1 w-full border-none outline-none flex items-start">
                    <label class="text-gray-300 dark:text-gray-300 mr-2">Message</label> 
                    <textarea cols="30" rows="8" class="w-full text-gray-700 bg-white border-none rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Write Message Here"></textarea>
                </div>
            </div>
        <div class="flex gap-3">
        <div class="relative w-1/3 mt-2 mb-20">
                <x-dropdown align="left" :content-classes="'py-2 bg-gray-600'" dropdown-classes="border-gray-300" :close-on-click-away="false">
                    <x-slot name="trigger">
                        <button class="text-white bg-gray-600 px-3 rounded-full h-10 w-full">Select Student</button>
                    </x-slot>
                    <x-slot name="content">
                        <ul class="h-24 overflow-y-auto">
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">All Student</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div x-data="{ checked: false }">
                                    <label class="inline-flex items-center px-3">
                                      <input type="checkbox" x-model="checked" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                      <span class="ml-2 text-white">Student Name</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </x-slot>
                </x-dropdown>
            </div>   
            <div class="relative flex">
                <input type="file" class="border h-8 mt-2 rounded-lg dark:bg-gray-900 dark:text-gray-300 outline-none" />                                                
            </div>
        </div>   
    </x-slot>
    <x-slot name="footer">
        <div class="flex bg-gray-600 px-5 rounded-full justify-center w-1/3">
            <button class=" flex text-gray-500 transition-colors py-3 duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-600">
                <img alt="ecommerce" class="object-cover w-5 h-5 rounded" src="{{ asset('images/sendw.png') }}">
                <h2  class="px-3 text-sm font-medium text-gray-800 dark:text-white ">Send</h2>  
            </button>
        </div>
    </x-slot>
</x-dialog-modal>