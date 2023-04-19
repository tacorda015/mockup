<div class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-4 mx-auto">
        <div class="p-8 bg-gray-100 dark:bg-gray-800 rounded-xl flex gap-3 flex-wrap items-center">
            <div class="flex flex-col flex-grow">
                <div class="flex items-center mb-4 text-2xl px-7 pt-1 h-10 w-3/4 border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">
                  <p class="text-gray-300 dark:text-gray-300 mr-2">Component :</p>  
                  <h1 class="text-gray-300 dark:text-gray-300 text-xl">Reserve Officers' Training Corps (ROTC)</h1>
                </div>
                <div class="text-2xl px-7 pt-1 h-10 w-3/4 border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none flex items-center">
                  <p class="text-gray-300 dark:text-gray-300 mr-2">Platoon :</p>
                  <p class="text-gray-300 dark:text-gray-300 text-xl">Alpha 1st</p>   
                </div>
              </div>
            <div class="relative flex-grow-1 pl-32">
                <img alt="ecommerce" class="object-cover w-20 h-20 rounded" src="{{ asset('images/profile.png') }}">
            </div>
        </div>
        <div class="p-8 mt-4 dark:bg-gray-800 rounded-xl">
            <div class="flex gap-3 flex-wrap">
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">201910045</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Student Number</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">Eduardo Tacorda</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Name</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">4th Year</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Year Level</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">BS Infotech 402B</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Section</label>
                </div>
            </div>
            <div class="flex gap-2 flex-wrap">
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Course</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">611 B10 AC MERCADO, WAWA II, ROSARIO, CAVITE</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Address</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">09465419569</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">Contact Number</label>
                </div>
                <div class="flex-grow ">
                    <h1 class="text-2xl px-7 pt-1 h-10 w-full border-none text-gray-700 bg-white rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 outline-none">eduardo.tacorda@cvsu.edu.ph</h1>
                    <label for="email" class="pl-8 text-gray-300 text-sm">CvSU Email Address</label>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 gap-8 mt-6 lg:grid-cols-3 xl:mt-5">
            <a href="{{ route('groupinfo.index') }}">
            <div class="flex items-center justify-between px-8 py-4 border cursor-pointer rounded-xl dark:border-gray-700">
                <div class="flex flex-col items-center space-y-1">
                    <img alt="ecommerce" class="object-cover w-20 h-20 rounded text-white" src="{{ asset('images/group.png') }}">
                    <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Group</h2>
                </div>
                <h2 class="text-xl bg-white py-5 px-5 rounded-full font-medium text-black">View Students</h2>
            </div>
            </a>    

            <a href="{{ route('qrcodescanner.index') }}">
            <div class="flex items-center justify-between px-8 py-4 border border-blue-500 cursor-pointer rounded-xl">
                <div class="flex flex-col items-center space-y-1">
                    <svg class="w-20 h-20 rounded text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 7v-1a2 2 0 0 1 2 -2h2" />  <path d="M4 17v1a2 2 0 0 0 2 2h2" />  
                        <path d="M16 4h2a2 2 0 0 1 2 2v1" />  <path d="M16 20h2a2 2 0 0 0 2 -2v-1" />  <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Qr Code</h2>
                </div>
                <h2 class="text-xl bg-white p-5 rounded-full font-medium text-black">QR Code Scanner</h2>
            </div>
            </a> 

            <a href="{{ route('teachernotification.index') }}">
            <div class="flex items-center justify-between px-8 py-4 border cursor-pointer rounded-xl dark:border-gray-700">
                <div class="flex flex-col items-center space-y-1">
                    <img alt="ecommerce" class="object-cover w-20 h-20 rounded text-white" src="{{ asset('images/speech-bubblew.png') }}">
                    <h2 class="text-lg font-medium text-gray-700 sm:text-xl dark:text-gray-200">Message</h2>
                </div>
                <h2 class="text-xl bg-white p-5 rounded-full font-medium text-black">Send Schedule</h2>
            </div>
            </a> 
        </div>
    </div>
</div>