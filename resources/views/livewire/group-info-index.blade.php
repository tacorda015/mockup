<section class="container px-4 mx-auto">
    <div class="sm:flex sm:items-center sm:justify-center">
        <h1 class="px-4 mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">Student List</h1>
    </div>
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center mt-4 gap-x-3">
            <a href="{{ route('groupattendance.index') }}">
                <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <img alt="ecommerce" class="object-cover w-10 h-10" src="{{ asset('images/calendarw.png') }}">
                    <span>View Attendance</span>
                </button>
            </a>
            <a href="{{ route('location.index') }}">
            <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                <img alt="ecommerce" class="object-cover w-10 h-10" src="{{ asset('images/map-marker.png') }}">
                <span>Send Location Activity</span>
            </button>
            </a>
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
    <div class="flex items-center my-2 mt-5">
        <h2 class="text-lg font-medium text-gray-800 dark:text-white mx-3">Aplha 1st</h2>
        <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">37 Students</span>
    </div>
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <span>Name</span>
                                    </div>
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Email address</th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <button class="flex items-center gap-x-2">
                                        <span>Status</span>
                                    </button>
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <button class="flex items-center gap-x-2">
                                        <span>Gender</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                        </svg>
                                    </button>
                                </th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
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
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">eduardotacorda17@gmail.com</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">Enrolled</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>
                                        <a href="{{ route('teachergrade.index') }}">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>
                                        </a>
                                            <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Input Grade</span>
                                            </button>
                                        
                                    </div>
                                </td>
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
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">norvinehermeno@gmail.com</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">Enrolled</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>
                                        <a href="{{ route('teachergrade.index') }}">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>
                                        </a>
                                            <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Input Grade</span>
                                            </button>
                                        
                                    </div>
                                </td>
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
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">sheilapermacio@gmail.com</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">Enrolled</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Female</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>
                                        <a href="{{ route('teachergrade.index') }}">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>
                                        </a>
                                            <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Input Grade</span>
                                            </button>
                                        
                                    </div>
                                </td>
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
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">johnlawrencejaril@gmail.com</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">Enrolled</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>
                                        <a href="{{ route('teachergrade.index') }}">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>
                                        </a>
                                            <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Input Grade</span>
                                            </button>
                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        

                                        <div class="flex items-center gap-x-2">
                                            <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">John Vincent Adina</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">@johnvincent</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">johnvincentadina@gmail.com</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">Enrolled</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>
                                        <a href="{{ route('teachergrade.index') }}">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>
                                        </a>
                                            <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Input Grade</span>
                                            </button>
                                        
                                    </div>
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


<x-dialog-modal wire:model="showingPostModal" style="width: 600px;">
        <x-slot name="title">
            <h1 class="flex justify-center text-xl">Input Grade</h1>
        </x-slot>
    <x-slot name="content">
        <form method="post">
            <div class="flex gap-3 flex-wrap mt-5">
                <div class="relative w-36 flex-grow">
                    <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                        <option>--Type--</option>
                        <option>Quiz</option>
                        <option>Participation</option>
                        <option>Prelim</option>
                        <option>Midterm</option>
                        <option>Prefinal</option>
                        <option>Final</option>
                    </select>
                </div>
                <div class="relative flex-grow">
                    <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name of School" />                                                
                    <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Number of items</label>
                </div>
                <div class="relative flex-grow">
                    <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Year Graduated" />                                                
                    <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Score</label>
                </div>
            </div>
        </form>
    </x-slot>
    <x-slot name="footer">
            <x-button wire:click="storePost">Submit</x-button>
    </x-slot>
</x-dialog-modal>