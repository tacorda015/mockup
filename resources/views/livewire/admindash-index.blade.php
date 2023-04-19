<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-5xl text-center font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Admin Dashboard</h1>

        <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-12 md:grid-cols-3 xl:grid-cols-3">

            <a href="{{ route('group.index') }}">
            <div class=" space-y-1 bg-gray-600 p-5 rounded-md">
                <span class="p-3">
                    <img alt="ecommerce" class="w-20 h-auto mx-auto" src="{{ asset('images/groupb.png') }}">
                </span>        
                <h1 class="text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white">List of Groups</h1>
                <p class="text-gray-500 dark:text-gray-300 text-center">
                    Create, View, Update, and Delete
                </p>
            </div>
            </a>

            <a href="{{ route('teacher.list.index') }}">
            <div class=" space-y-1 bg-gray-600 p-5 rounded-md">
                <span class="p-3">
                    <img alt="ecommerce" class="w-20 h-auto mx-auto" src="{{ asset('images/teacher.png') }}">
                </span>        
                <h1 class="text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white">List of Teacher and Trainer</h1>
                <p class="text-gray-500 dark:text-gray-300 text-center">
                    Create, View, Update, and Delete
                </p>
            </div>
            {{-- </a> --}}

            <a href="{{ route('student.list.index') }}">
            <div class=" space-y-1 bg-gray-600 p-5 rounded-md">
                <span class="p-3">
                    <img alt="ecommerce" class="w-20 h-auto mx-auto" src="{{ asset('images/student.png') }}">
                </span>        
                <h1 class="text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white">List of Students</h1>
                <p class="text-gray-500 dark:text-gray-300 text-center">
                    Create, View, Update, and Delete
                </p>
            </div>
            </a>

            <a href="{{ route('enrollmentlist.index') }}">
            <div class=" space-y-1 bg-gray-600 p-5 rounded-md">
                <span class="p-3">
                    <img alt="ecommerce" class="w-20 h-auto mx-auto" src="{{ asset('images/Enrollment.png') }}">
                </span>        
                <h1 class="text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white">Manage Enrollment</h1>
                <p class="text-gray-500 dark:text-gray-300 text-center">
                    Limit the Enrollees, ON and OFF the Enrollment
                </p>
            </div>
            </a>

            <a href="{{ route('teachernotification.index') }}">
            <div class=" space-y-1 bg-gray-600 p-5 rounded-md">
                <span class="p-3">
                    <img alt="ecommerce" class="w-20 h-auto mx-auto" src="{{ asset('images/notification.png') }}">
                </span>        
                <h1 class="text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white">Send Announcement</h1>
                <p class="text-gray-500 dark:text-gray-300 text-center">
                    Send, Receive, and Delete
                </p>
            </div>
            </a>

            <a href="{{ route('exportimport.index') }}">
            <div class=" space-y-1 bg-gray-600 p-5 rounded-md">
                <span class="p-3">
                    <img alt="ecommerce" class="w-20 h-auto mx-auto" src="{{ asset('images/uploaddownload.png') }}">
                </span>        
                <h1 class="text-2xl text-center font-semibold text-gray-700 capitalize dark:text-white">Import and Export File</h1>
                <p class="text-gray-500 dark:text-gray-300 text-center">
                    Upload and Download
                </p>
            </div>
            </a>
        </div>
    </div>
</section>