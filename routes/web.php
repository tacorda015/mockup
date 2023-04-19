<?php

use App\Http\Livewire\AdminAttendanceIndex;
use App\Http\Livewire\AdmindashIndex;
use App\Http\Livewire\AttendanceIndex;
use App\Http\Livewire\EnrollmentIndex;
use App\Http\Livewire\EnrollmentListIndex;
use App\Http\Livewire\ExportImportIndex;
use App\Http\Livewire\GroupAttendanceIndex;
use App\Http\Livewire\GroupIndex;
use App\Http\Livewire\GroupInfoIndex;
use App\Http\Livewire\LocationIndex;
use App\Http\Livewire\NotificationIndex;
use App\Http\Livewire\PostIndex;
use App\Http\Livewire\QrcodeScannerIndex;
use App\Http\Livewire\SlocationIndex;
use App\Http\Livewire\StudentDashIndex;
use App\Http\Livewire\StudentGradeIndex;
use App\Http\Livewire\StudentGroupIndex;
use App\Http\Livewire\StudentListIndex;
use App\Http\Livewire\TeacherDashIndex;
use App\Http\Livewire\TeacherGradeIndex;
use App\Http\Livewire\TeacherListIndex;
use App\Http\Livewire\TeacherNotificationIndex;
use App\Http\Livewire\TeacherNotificationPageIndex;
use App\Http\Livewire\TeacherVirtualIndex;
use App\Http\Livewire\TrainerListIndex;
use App\Http\Livewire\VirtualIndex;
use App\Models\StudentDash;
use App\Models\TeacherList;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Role as JetstreamRole;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/enrollment', EnrollmentIndex::class)->name('enrollment.index'); // Enrollment for Landing Page

Route::get('/posts',PostIndex::class)->name('post.index');                              // QR code page for Student         2
Route::get('/attendance', AttendanceIndex::class)->name('attendance.index');         // Attendance page for Student         3
Route::get('/notification', NotificationIndex::class)->name('notification.index'); // Notification page for Student         4
Route::get('/virtual', VirtualIndex::class)->name('virtual.index');            // Virtual Learning page for Student         5
Route::get('/studentdash', StudentDashIndex::class)->name('studentdash.index');         // Landing Page for Student         1
Route::get('/grade', StudentGradeIndex::class)->name('studentgrade.index');               // Grade page for Student         6
Route::get('/slocation', SlocationIndex::class)->name('slocation.index');          // Activity Location for Student         7

Route::get('/location', LocationIndex::class)->name('location.index');                             // Send Activity Location for Teacher            5
Route::get('/teacherdash', TeacherDashIndex::class)->name('teacherdash.index');                               //landing Page for Teacher            1
Route::get('/teachernotification', TeacherNotificationIndex::class)->name('teachernotification.index'); // Notification Page for Teacher            7
Route::get('/groupinfo', GroupInfoIndex::class)->name('groupinfo.index');                               // Group Information for Teacher            3
Route::get('/groupattendance', GroupAttendanceIndex::class)->name('groupattendance.index');              // Group Attendance for Teacher            2
Route::get('/qrcodescanner', QrcodeScannerIndex::class)->name('qrcodescanner.index');                      // Qrcode Scanner for Teacher            6
Route::get('/teachervirtual', TeacherVirtualIndex::class)->name('teachervirtual.index');                 // Virtual Learning for Teacher            8
Route::get('/teachergrade', TeacherGradeIndex::class)->name('teachergrade.index');            // View Grade Student in Group For Teacher            4

Route::get('/studentlist', StudentListIndex::class)->name('student.list.index');                                         // Student List for Admin              5
Route::get('/teacherlist', TeacherListIndex::class)->name('teacher.list.index');                                         // Teacher List for Admin              3
Route::get('/trainerlist', TrainerListIndex::class)->name('trainerlist.index');                                          // Trainer List for Admin              4
Route::get('/group', GroupIndex::class)->name('group.index');                                                            // Create Group for Admin              1
Route::get('/studentgroup', StudentGroupIndex::class)->name('studentgroup.index');                             // View Group Information for Admin              2
Route::get('/enrollmentlist', EnrollmentListIndex::class)->name('enrollmentlist.index');                       // View List of Enrollees for Admin              6
Route::get('/exportimport', ExportImportIndex::class)->name('exportimport.index');                             // Export and Import File for Admin              7
Route::get('/admindash', AdmindashIndex::class)->name('admindash.index');
