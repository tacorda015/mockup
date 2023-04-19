

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
        <div class="w-full lg:w-1/5 px-6 text-xl text-gray-800 leading-normal">
            <p class="text-base font-bold py-2 lg:pb-6 text-gray-300">Process</p>
            <div class="block lg:hidden sticky inset-0">
                <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-yellow-600 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </button>
            </div>
            <div class="w-full sticky inset-0 hidden max-h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 my-2 lg:my-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:6em;" id="menu-content">
                <ul class="list-reset py-2 md:py-0">
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent font-bold border-yellow-600">
                        <a href='#section1' class="block pl-4 align-middle text-gray-300 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Personal Information</span>
                        </a>
                    </li>
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section2' class="block pl-4 align-middle text-gray-300 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Guardian Information</span>
                        </a>
                    </li>
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section3' class="block pl-4 align-middle text-gray-300 no-underline hover:text-yellow-600">
                            <span class="pb-1 md:pb-0 text-sm">Educational Information</span>
                        </a>
                    </li>
                    <li class="py-1 md:my-2 hover:bg-yellow-100 lg:hover:bg-transparent border-l-4 border-transparent">
                        <a href='#section4' class="block pl-4 align-middle text-transparent cursor-default">
                            <span class="pb-1 md:pb-0 text-sm">submit</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Section container-->
        <section class="w-full lg:w-4/5">

            <!--Title-->
            <h1 class="flex items-center font-sans font-bold break-normal justify-center text-gray-300 px-2 text-4xl mt-12 lg:mt-0 ">
				National Service Training Program
			</h1>
            <h6 class="flex items-center font-sans font-bold break-normal justify-center text-gray-300 px-2 text-2xl mt-12 lg:mt-0 ">
				Enrollment
			</h6>

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 id='section1' class="font-sans font-bold break-normal text-gray-300 px-2 pb-8 text-xl">Personal Information</h2>
            <div class="flex gap-3 flex-wrap my-5 justify-end">
                <h1 class="pt-2 text-gray-300 text-base">Picture</h1>
                <div class="relative flex w-60">
                    <input type="file" class="border rounded-lg dark:bg-gray-900 dark:text-gray-300 outline-none" placeholder="Name of School" />                                                
                </div>
            </div>
            <!--Card-->
            <div class="p-6 mt-6 lg:mt-0 leading-normal rounded shadow bg-gray-700 w-full">
                <div class="flex gap-3 flex-wrap">
                    <div class="relative flex-grow">
                        <input type="text" class="pl-3 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Surname" />
                        <label for="email" class="pl-3 absolute left-0 -top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Surname</label>
                    </div>
                    <div class="relative flex-grow">
                        <input type="text" class="pr-3 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="First Name" />
                        <label for="email" class="pl-3 absolute left-0 -top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">First Name</label>
                    </div>
                    <div class="relative flex-grow-3">
                        <input type="text" class="pr-3 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Middle Name" />
                        <label for="email" class="pl-3 absolute left-0 -top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Middle Name</label>
                    </div>
                    <div class="relative flex-grow-3">
                        <input type="text" class="pr-3 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Student ID No" />
                        <label for="email" class="pl-3 absolute left-0 -top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Student ID No:</label>
                    </div>
                </div>
                <div class="flex gap-3 flex-wrap mt-5">
                    <div class="relative flex-grow">
                        <input type="text" class="pr-3 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Course" />
                        <label for="email" class="pl-3 absolute left-0 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Course</label>
                    </div>
                    <div class="relative flex-grow-2">
                        <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                            <option>--Select Component--</option>
                            <option>ROTC</option>
                            <option>CWTS</option>
                        </select>
                    </div>
                    <div class="relative flex-grow-2">
                        <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                            <option>--Gender--</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="relative flex-grow-3">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Age" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Age</label>
                    </div>
                </div>
                <div class="flex gap-3 flex-wrap mt-5">
                    <div class="relative flex-grow-3">
                        <input type="date" class="h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Birth Date" />
                    </div>
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Birth Place" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Birth Place</label>
                    </div>
                </div>
                <div class="flex gap-3 flex-wrap mt-5">
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Address" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Address</label>
                    </div>
                </div>
                <div class="flex gap-3 flex-wrap mt-5">
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Religion" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Religion</label>
                    </div>
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Height" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Height</label>
                    </div>
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Weight" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Weight</label>
                    </div>
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Bloold Type" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Blood Type</label>
                    </div>
                </div>
                <div class="flex gap-3 flex-wrap mt-5">
                    <div class="relative w-32">
                        <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                            <option>--Status--</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                        </select>
                    </div>
                    <div class="relative flex-grow">
                        <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Bloold Type" />
                        <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">(If Married) Name of Spouse</label>
                    </div>
                </div>
            </div>
            
            <!--/Card-->

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 class="font-sans font-bold break-normal text-gray-300 px-2 pb-8 text-xl">Guardian Information</h2>

            <!--Card-->
            <div id='section2' class="p-6 mt-6 lg:mt-0 leading-normal rounded shadow bg-gray-700 w-full">
                <form>
                    <div class="flex gap-3 flex-wrap ">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name of Father" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Name of Father</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Occupation" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Occupation</label>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Address" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Address</label>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name of Father" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Name of Mother</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Occupation" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Occupation</label>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Address" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Address</label>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <h1 class="pl-3 text-gray-300 text-lg">Person to be notified in case of Emergency</h1>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Name to be Contact</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Relationship" />
                            <label class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Relationship</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Occupation" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Contact Number</label>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Address" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Address</label>
                        </div>
                    </div>
                </form>

            </div>
            <!--/Card-->

            <!--divider-->
            <hr class="bg-gray-300 my-12">

            <!--Title-->
            <h2 class="font-sans font-bold break-normal text-gray-300 px-2 pb-8 text-xl">Educational Information</h2>

            <!--Card-->
            <div id='section3' class="p-8 mt-6 lg:mt-0 rounded shadow bg-gray-700">

                <form>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <h1 class="pt-2 text-gray-300 text-base">Elementary</h1>
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name of School" />                                                
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Name of School</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Year Graduated" />                                                
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Year Graduated</label>
                        </div>
                        <div class="relative w-36">
                            <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                                <option>--Type of School--</option>
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <h1 class="pt-2 text-gray-300 text-base">Junior High</h1>
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name of School" />                                                
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Name of School</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Year Graduated" />                                                
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Year Graduated</label>
                        </div>
                        <div class="relative w-36">
                            <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                                <option>--Type of School--</option>
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <h1 class="pt-2 text-gray-300 text-base">Senior High</h1>
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Name of School" />                                                
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Name of School</label>
                        </div>
                        <div class="relative flex-grow-1">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Year Graduated" />                                                
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Year Graduated</label>
                        </div>
                        <div class="relative w-36">
                            <select name="group" class="pr-3 placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none text-sm">
                                <option>--Type of School--</option>
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-3 flex-wrap mt-5">
                        <div class="relative flex-grow">
                            <input type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none" placeholder="Academics Achivements" />
                            <label for="email" class="pl-3 absolute left-0 top-2 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-4 peer-focus:text-white peer-focus:text-sm">Academics Achivements</label>
                        </div>
                    </div>
                </form>
            </div>
            <!--/Card-->
        </section>
        <!--/Section container-->

        <!--Back link -->
        <div class="w-full lg:w-4/5 lg:ml-auto text-base text-center md:text-sm text-gray-600 px-4 py-8 mb-12">
            <button class="px-6 py-3 bg-gray-600 cursor-pointer rounded-full"><h1 href="#" class="text-base md:text-sm text-white font-bold no-underline hover:underline">Submit</h1></button>
         </div>

      </div>
      <!--/container-->

<!-- Toggle dropdown list -->
<script>
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var userMenuDiv = document.getElementById("userMenu");
var userMenu = document.getElementById("userButton");

 var helpMenuDiv = document.getElementById("menu-content");
 var helpMenu = document.getElementById("menu-toggle");

document.onclick = check;

function check(e){
  var target = (e && e.target) || (event && event.srcElement);

  //User Menu
  if (!checkParent(target, userMenuDiv)) {
	// click NOT on the menu
	if (checkParent(target, userMenu)) {
	  // click on the link
	  if (userMenuDiv.classList.contains("invisible")) {
		userMenuDiv.classList.remove("invisible");
	  } else {userMenuDiv.classList.add("invisible");}
	} else {
	  // click both outside link and outside menu, hide menu
	  userMenuDiv.classList.add("invisible");
	}
  }

   //Help Menu
   if (!checkParent(target, helpMenuDiv)) {
	// click NOT on the menu
	if (checkParent(target, helpMenu)) {
	  // click on the link
	  if (helpMenuDiv.classList.contains("hidden")) {
		helpMenuDiv.classList.remove("hidden");
	  } else {helpMenuDiv.classList.add("hidden");}
	} else {
	  // click both outside link and outside menu, hide menu
	  helpMenuDiv.classList.add("hidden");
	}
   }

}

function checkParent(t, elm) {
  while(t.parentNode) {
	if( t == elm ) {return true;}
	t = t.parentNode;
  }
  return false;
}

</script>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Scroll Spy -->
<script>
/* http://jsfiddle.net/LwLBx/ */

// Cache selectors
var lastId,
    topMenu = $("#menu-content"),
    topMenuHeight = topMenu.outerHeight()+175,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  if (!helpMenuDiv.classList.contains("hidden")) {
		helpMenuDiv.classList.add("hidden");
	  }
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("font-bold border-yellow-600")
         .end().filter("[href='#"+id+"']").parent().addClass("font-bold border-yellow-600");
   }                   
});

</script>

</body>