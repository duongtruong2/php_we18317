<?php



use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

// sủ dụng Router để trỏ đến view 
// Route::get('/hello', function() {
//     return view('xinchao');
// });

// Route::view('/hello', 'xinchao');

//truyền dữ liệu sang view 
// Route::get('/hello', function() {
//     $title="truong";
//     $text="truong dep trai";
//         return view ('xinchao', ['title' => $title,'text'=> $text]);
//     });

// Route::view('/hello', 'xinchao',[
//     'title'=>'hi hi',
//     'text'=>'hihi dep trai',
// ]);

//tạo 1 route trỏ đến 1 hàm 
// Route::get('/san_pham',[SanPhamController::class,'index']);

Route::get('khachhangs', [KhachhangController::class, 'index']);
Route::get('them', [KhachhangController::class, 'khachhangs.create']);





Route::get('students', [StudentController::class, 'index'])->name('student.all');
Route::get('them-sinhvien', [StudentController::class, 'addstudent'])->name('student.add');
Route::post('them-sinhvien', [StudentController::class, 'store'])->name('student.store');
Route::get('edit-sinhvien/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('update-sinhvien/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('delete-sinhvien/{id}', [StudentController::class, 'delete'])->name('student.delete');




Route::get('/home', [HomeController::class, 'index']);