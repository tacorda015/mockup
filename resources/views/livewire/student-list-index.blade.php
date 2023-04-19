<section class="container px-4 mx-auto">
    <div class="sm:flex sm:items-center sm:justify-center">
        <h1 class="px-4 mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">Student List</h1>
    </div>
    <div class="sm:flex sm:items-center sm:justify-between">
        <div>
            <button wire:click="showPostModal" class="flex items-center justify-center w-1/2 px-5 py-2 mt-5 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>Add Student</span>
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

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Status</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Contact Number</th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <button class="flex items-center gap-x-2">
                                        <span>Component</span>
                                    </button>
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <button class="flex items-center gap-x-2">
                                        <span>Cluster/Platton Name</span>

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
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">eduardotacorda17@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Enrolled</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">09465419569</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">CWTS</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Cluster A</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>

                                        <button wire:click="viewStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>

                                        <button wire:click="editStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Edit</span>
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
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">norvinehermeno@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Not Enrolled</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">09456987312</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">--</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">--</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>

                                        <button wire:click="viewStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>

                                        <button wire:click="editStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Edit</span>
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
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">sheilapermacio@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Enrolled</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">09875632895</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">ROTC</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Medic</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>

                                        <button wire:click="viewStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>

                                        <button wire:click="editStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Edit</span>
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
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">johnlawrencejaril@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Not Enrolled</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">09658962173</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">--</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">--</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>

                                        <button wire:click="viewStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>

                                        <button wire:click="editStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Edit</span>
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
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Juan Dela Crusz</h2>
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">juandelacruz@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Drop</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">09468896634</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    
                                        <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                                        <h2 class="text-sm font-normal text-white">ROTC</h2>
                                    
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Bravo 2nd</td>
                                
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-3">
                                        <button class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/delete.png') }}">
                                            <span>Delete</span>
                                        </button>

                                        <button wire:click="viewStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                            <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/view.png') }}">
                                            <span>View</span>
                                        </button>

                                        <button wire:click="editStudent" class="flex items-center justify-center w-1/2 px-2 py-1 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/grade.png') }}">
                                                <span>Edit</span>
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

    <div class="flex items-center justify-between mt-6">
        <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>

            <span>
                previous
            </span>
        </a>

        <div class="items-center hidden lg:flex gap-x-3">
            <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a>
        </div>

        <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
            <span>
                Next
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</section>

<x-dialog-modal wire:model="showPostModal">
        <x-slot name="title">Add Student</x-slot>
    <x-slot name="content">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
            <form enctype="multipart/form-data">
                <div class="sm:col-span-6">
                <label for="title" class="block text-sm font-medium text-white"> Student Name </label>
                <div class="mt-1">
                    <input type="text" id="title" wire:model.lazy="title" name="title" class="mb-6 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
                </div>
                <div class="sm:col-span-6">
                <label for="title" class="block text-sm font-medium text-white"> Student Image </label>
                <img alt="ecommerce" class="object-cover w-10 h-10 rounded-full" src="{{ asset('images/profile.png') }}">
                <div class="mt-1">
                    <input type="file" id="image" wire:model="newImage" name="image" class="mb-6 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
                @error('newImage') <span class="text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="sm:col-span-6">
                <label for="title" class="block text-sm font-medium text-white"> Student Component </label>
                <div class="mt-1">
                    <input type="text" id="title" wire:model.lazy="title" name="title" class="mb-6 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
                </div>
                <div class="sm:col-span-6">
                <label for="title" class="block text-sm font-medium text-white"> Student Group Name</label>
                <div class="mt-1">
                    <input type="text" id="title" wire:model.lazy="title" name="title" class="mb-6 block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
                </div>
            </form>
            </div>
    </x-slot>
    <x-slot name="footer">
            <x-button wire:click="storePost">Create</x-button>
    </x-slot>
</x-dialog-modal>

<x-dialog-modal wire:model="editStudent">
        <x-slot name="title">Edit Student</x-slot>
    <x-slot name="content">
        <div class="p-8 mt-4 dark:bg-gray-800 rounded-xl">
            <div class="flex gap-3 flex-wrap">
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-900 bg-white rounded-lg dark:bg-green-500 dark:text-gray-900 dark:border-gray-600 outline-none">Enrolled</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Status</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">ROTC</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Component</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">Alpha 1st</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Group Name</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">201910045</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Student Number</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">Eduardo Tacorda</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Name</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">4th Year</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Year Level</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">BS Infotech 402B</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Section</label>
                </div>
            </div>
            <div class="flex gap-2 flex-wrap">
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Course</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">611 B10 AC MERCADO, WAWA II, ROSARIO, CAVITE</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Address</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">09465419569</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Contact Number</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">eduardo.tacorda@cvsu.edu.ph</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">CvSU Email Address</label>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
            <x-button wire:click="storePost">Save</x-button>
    </x-slot>
</x-dialog-modal>

<x-dialog-modal wire:model="viewStudent">
        <x-slot name="title">Student Information</x-slot>
    <x-slot name="content">
        <div class="p-8 mt-4 dark:bg-gray-800 rounded-xl">
            <div class="flex gap-3 flex-wrap">
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-900 bg-white rounded-lg dark:bg-green-500 dark:text-gray-900 dark:border-gray-600 outline-none">Enrolled</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Status</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">ROTC</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Component</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">Alpha 1st</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Group Name</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">201910045</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Student Number</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">Eduardo Tacorda</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Name</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">4th Year</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Year Level</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">BS Infotech 402B</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Section</label>
                </div>
            </div>
            <div class="flex gap-2 flex-wrap">
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Course</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">611 B10 AC MERCADO, WAWA II, ROSARIO, CAVITE</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Address</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">09465419569</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">Contact Number</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-lg px-3 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">eduardo.tacorda@cvsu.edu.ph</h1>
                    <label for="email" class="pl-4 text-gray-300 text-sm">CvSU Email Address</label>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
            <x-button wire:click="storePost">Close</x-button>
    </x-slot>
</x-dialog-modal>