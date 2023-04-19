<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  /* -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px); */
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<section class="container px-4 mx-auto">
    <div class="sm:flex sm:items-center sm:justify-center">
        <h1 class="px-4 mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">List of Enrollees</h1>
    </div>
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="flex gap-3 items-center">
            <a href="{{ route('enrollment.index') }}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                <img alt="ecommerce" class="object-cover w-5 h-5" src="{{ asset('images/form.png') }}">
                <span>Enrollment Form</span>
            </a> 
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>             
            <h1 scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">OFF/ON Enrollment</h1>
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
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Name</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Student Number</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Component</th>
                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Course</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Gender</th>
                                <th scope="col" class="relative py-3.5 px-4"><span class="sr-only">Edit</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="font-medium text-gray-800 dark:text-white ">Tacorda, Eduardo</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">201910045</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">ROTC</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="text-sm font-normal text-white">BSInfoTech</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                <td class=" px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="justify-center flex items-center gap-x-3">
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
                                    <h2 class="font-medium text-gray-800 dark:text-white ">Norvine, Hermeno</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">201910072</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">CWTS</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="text-sm font-normal text-white">BSInfoTech</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                <td class=" px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="justify-center flex items-center gap-x-3">
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
                            </tr><tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="font-medium text-gray-800 dark:text-white ">Permacio, Shiela</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">201910060</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">CWTS</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="text-sm font-normal text-white">BSInfoTech</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Female</td>
                                <td class=" px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="justify-center flex items-center gap-x-3">
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
                            </tr><tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="font-medium text-gray-800 dark:text-white ">Jaril, John Lawrence</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">201910063</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">ROTC</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="text-sm font-normal text-white">BSInfoTech</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                <td class=" px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="justify-center flex items-center gap-x-3">
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
                            </tr><tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="font-medium text-gray-800 dark:text-white ">Dela Cruz, Juan</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">201910001</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">CWTS</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="text-sm font-normal text-white">BSCS</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Male</td>
                                <td class=" px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="justify-center flex items-center gap-x-3">
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
                            </tr><tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="font-medium text-gray-800 dark:text-white ">Castro, Angle</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">201910002</td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">ROTC</td>
                                <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <h2 class="text-sm font-normal text-white">BSIT</h2>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Female</td>
                                <td class=" px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="justify-center flex items-center gap-x-3">
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